<?php include "./config.php"; ?>
<!DOCTYPE html>
<html class="js aos-initialized" lang="en"
    style="--full-screen: 738px; --three-quarters: 553.5px; --two-thirds: 487.08000000000004px; --one-half: 369px; --one-third: 243.54000000000002px; --one-fifth: 147.6px; --menu-height: 105px; --scrollbar-width: 15px; --footer-logo: 80px; --announcement-height: 0px; --toolbar-height: 20px; --header-height: 105px; --footer-height: 396px; --content-full: 593px; --menu-height-sticky: 105px; --menu-backfill-height: 105px;">
<?php include "./elements/meta.php"; ?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
    background-color: #efffff !important;
}
.main-content {
    background-color: #efffff !important;
}
.bg--neutral, .palette--light {
    background-color: #efffff !important;
}
.canvas-container { 
    border: 2px solid #ddd; 
    margin: 20px 0; 
    display: inline-block;
    background: white;
}
#customizationCanvas {
    max-width: 100%;
    height: auto;
    border: 1px solid #ddd;
}
.product-selection {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin: 20px 0;
}
.product-option {
    border: 2px solid #ddd;
    padding: 10px;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s;
    text-align: center;
    min-width: 150px;
    position: relative;
    z-index: 1;
}
.product-option:hover {
    border-color: #568eae;
    box-shadow: 0 2px 8px rgba(86, 142, 174, 0.3);
}
.product-option.selected {
    border-color: #568eae;
    background-color: #f0f8ff;
    box-shadow: 0 2px 8px rgba(86, 142, 174, 0.5);
}
.product-option img {
    width: 100px;
    height: 80px;
    object-fit: cover;
    border-radius: 4px;
}
.form-section {
    background: white;
    padding: 30px;
    margin: 20px 0;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
.preview-section {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
</style>
</head>

<body id="custom-amp-curated-gift-boxes-boxfox" ng-app="BOXFOX" ng-controller="App"
    class="template-index theme-animate-hover" style="background-color: #efffff !important;" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <?php include "./elements/header.php"; ?>
    <main class="main-content" id="MainContent" style="background-color: #efffff;">
        
        <!-- Hero Section -->
        <div class="section--image fade-in-child js-overflow-container has-overlay"
            style="--PT: 0px; --PB: 0px; --CONTENT-WIDTH: 2000px; --full-screen: 738px; min-height: calc(256px + var(--menu-height));">
            <div class="wrapper--none section-padding">
                <div class="section__inner">
                    <div class="hero__content__wrapper align--middle-center">
                        <div class="hero__content hero__content--transparent js-overflow-content">
                            <div class="text__standard text--white">
                                <div class="hero__kicker accent-size-4 aos-init aos-animate" data-aos="hero">
                                    <p>CREATE YOUR PERFECT CUSTOMIZED GIFT</p>
                                </div>
                                <div class="hero__title heading-size-10 aos-init aos-animate" data-aos="hero">
                                    <h1>Customized Gifts</h1>
                                </div>
                                <div class="hero__description rte body-size-6 aos-init aos-animate" data-aos="hero">
                                    <p>Design your own personalized gifts with our easy-to-use customization tool.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-overlay" style="--bg: #000000; opacity: 0.25;"></div>
                    <div class="image__hero__frame fade-in-child use_screen_one_fifth desktop">
                        <div class="image__hero__pane">
                            <div class="image__hero__scale">
                                <img src="<?php echo BASE_URL; ?>images/page/copgifts.png"
                                    alt="Customized Gifts Banner" width="1500" height="1000" loading="lazy"
                                    class="tw-block tw-overflow-hidden tw-object-cover tw-w-full tw-h-full"
                                    style="aspect-ratio: 1.5;object-position: center center;">
                            </div>
                        </div>
                    </div>
                    <img src="<?php echo BASE_URL; ?>images/page/copgifts.png" alt="Customized Gifts Banner" 
                         class="hero-mobile-image is-loaded" style="min-height: calc(256px + var(--menu-height));">
                </div>
            </div>
        </div>

        <!-- Main Form Section -->
        <div class="frame palette--light bg--neutral" style="--PT: 36px; --PB: 36px;">
            <div class="wrapper section-padding">
                
                <form id="customizedGiftForm" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="submit_customized_gift">
                    <input type="hidden" name="selected_product_id" id="selectedProductId">
                    <input type="hidden" name="logo_coordinates" id="logoCoordinates">
                    <input type="hidden" name="preview_image_data" id="previewImageData">

                    <!-- Product Selection Section -->
                    <div class="form-section">
                        <h2 class="custom__title accent-size-6 mb-4">1. Select Your Product</h2>
                        <div class="product-selection" id="productSelection">
                            <?php
                            $productsFile = './data/customized_products.json';
                            $products = [];
                            if (file_exists($productsFile)) {
                                $products = json_decode(file_get_contents($productsFile), true) ?: [];
                            }
                            
                            // Debug: Check if products are loaded
                            echo "<!-- Debug: Products file exists: " . (file_exists($productsFile) ? 'Yes' : 'No') . " -->";
                            echo "<!-- Debug: Products count: " . count($products) . " -->";
                            
                            if (empty($products)): ?>
                                <p>No products available for customization at the moment.</p>
                            <?php else: ?>
                                <?php foreach ($products as $product): ?>
                                    <div class="product-option" data-product-id="<?php echo $product['id']; ?>" 
                                         data-product-image="<?php echo BASE_URL . $product['image']; ?>"
                                         data-printable-area='<?php echo json_encode($product['printable_area']); ?>'>
                                        <img src="<?php echo BASE_URL . $product['image']; ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                                        <div class="mt-2">
                                            <strong><?php echo htmlspecialchars($product['name']); ?></strong>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Logo Upload Section -->
                    <div class="form-section">
                        <h2 class="custom__title accent-size-6 mb-4">2. Upload Your Logo</h2>
                        <div class="mb-3">
                            <label for="logo_upload" class="form-label">Choose Logo File</label>
                            <input type="file" class="form-control" id="logo_upload" name="logo_upload" accept="image/*" required>
                            <small class="form-text text-muted">Supported formats: JPG, PNG, SVG (Max size: 5MB)</small>
                        </div>
                    </div>

                    <!-- Preview Section -->
                    <div class="form-section" id="previewSection" style="display: none;">
                        <h2 class="custom__title accent-size-6 mb-4">3. Position Your Logo</h2>
                        <p class="mb-3">Drag and resize your logo within the highlighted <span style="color: green; font-weight: bold;">green printable area</span>:</p>
                        <div class="preview-section">
                            <canvas id="customizationCanvas"></canvas>
                            <div class="mt-3">
                                <button type="button" class="btn btn-secondary" onclick="resetLogo()">Reset Logo Position</button>
                                <button type="button" class="btn btn-info" onclick="centerLogo()">Center Logo</button>
                            </div>
                            <div class="mt-2">
                                <small class="text-muted">
                                    <strong>Tips:</strong> 
                                    • The green area shows where your logo can be placed<br>
                                    • Drag the logo to move it around<br>
                                    • Use corner handles to resize the logo<br>
                                    • Logo will automatically stay within the printable area
                                </small>
                            </div>
                        </div>
                    </div>

                    <!-- Customer Details Section -->
                    <div class="form-section">
                        <h2 class="custom__title accent-size-6 mb-4">4. Your Contact Details</h2>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="company" class="form-label">Company (Optional)</label>
                            <input type="text" class="form-control" id="company" name="company">
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <select class="form-control" id="quantity" name="quantity" required>
                                <option value="">Select Quantity</option>
                                <option value="1-50">1-50</option>
                                <option value="50-100">50-100</option>
                                <option value="100-200">100-200</option>
                                <option value="200-500">200-500</option>
                                <option value="500-1000">500-1000</option>
                                <option value="1000+">1000+</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="comments" class="form-label">Additional Comments</label>
                            <textarea class="form-control" id="comments" name="comments" rows="4" placeholder="Any special requirements or notes..."></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="standard__cta btn--outline btn--long btn--black" id="submitBtn">
                            Submit Customization Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php include "./elements/footer.php"; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/5.3.0/fabric.min.js"></script>
    <script>
        let canvas;
        let productImage;
        let logoImage;
        let printableArea;
        let selectedProduct = null;
        // Wait for DOM to be ready before setting up all event listeners
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM loaded, setting up all event listeners...');
            
            // Check if Fabric.js is loaded
            if (typeof fabric === 'undefined') {
                console.error('Fabric.js is not loaded!');
                alert('Error: Fabric.js library failed to load. Please refresh the page.');
                return;
            }
            
            // Product selection
            const productOptions = document.querySelectorAll('.product-option');
            console.log('Found product options:', productOptions.length);
            
            // Debug: Log each product option
            productOptions.forEach((option, index) => {
                console.log(`Product ${index}:`, {
                    id: option.dataset.productId,
                    image: option.dataset.productImage,
                    printableArea: option.dataset.printableArea
                });
            });
            
            productOptions.forEach(option => {
                console.log('Setting up click handler for product:', option.dataset.productId);
                option.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    console.log('Product clicked:', this.dataset.productId);
                    alert('Product clicked: ' + this.dataset.productId); // Temporary debug alert
                    
                    // Remove previous selection
                    document.querySelectorAll('.product-option').forEach(opt => opt.classList.remove('selected'));
                    
                    // Select current option
                    this.classList.add('selected');
                    selectedProduct = {
                        id: this.dataset.productId,
                        image: this.dataset.productImage,
                        printableArea: JSON.parse(this.dataset.printableArea)
                    };
                    
                    console.log('Selected product:', selectedProduct);
                    document.getElementById('selectedProductId').value = selectedProduct.id;
                    
                    // Initialize canvas if logo is already uploaded
                    if (logoImage) {
                        initializeCanvas();
                    }
                });
            });

            // Logo upload
            const logoUpload = document.getElementById('logo_upload');
            if (logoUpload) {
                logoUpload.addEventListener('change', function(e) {
                    const file = e.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(event) {
                            fabric.Image.fromURL(event.target.result, function(img) {
                                logoImage = img;
                                if (selectedProduct) {
                                    initializeCanvas();
                                }
                            });
                        };
                        reader.readAsDataURL(file);
                    }
                });
            } else {
                console.error('Logo upload element not found');
            }

            // Form submission
            const customizedGiftForm = document.getElementById('customizedGiftForm');
            if (customizedGiftForm) {
                customizedGiftForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    if (!selectedProduct) {
                        alert('Please select a product.');
                        return;
                    }
                    
                    if (!logoImage) {
                        alert('Please upload a logo.');
                        return;
                    }
                    
                    // Generate preview image without green printable area
                    if (canvas) {
                        // Temporarily hide the printable area for export
                        if (printableArea) {
                            printableArea.set('visible', false);
                        }
                        canvas.renderAll();
                        
                        // Generate preview
                        const previewData = canvas.toDataURL('image/png');
                        document.getElementById('previewImageData').value = previewData;
                        
                        // Show the printable area again
                        if (printableArea) {
                            printableArea.set('visible', true);
                        }
                        canvas.renderAll();
                    }
                    
                    // Submit form
                    const formData = new FormData(this);
                    
                    document.getElementById('submitBtn').disabled = true;
                    document.getElementById('submitBtn').textContent = 'Submitting...';
                    
                    fetch('./api/customized-gifts',{
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('Your customization request has been submitted successfully! You will receive a confirmation email shortly.');
                            // window.location.href = '<?php echo BASE_URL; ?>contact-thanks';
                        } else {
                            alert('Error: ' + (data.message || 'Failed to submit request'));
                            document.getElementById('submitBtn').disabled = false;
                            document.getElementById('submitBtn').textContent = 'Submit Customization Request';
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred. Please try again.');
                        document.getElementById('submitBtn').disabled = false;
                        document.getElementById('submitBtn').textContent = 'Submit Customization Request';
                    });
                });
            } else {
                console.error('Form element not found');
            }
        }); // Close DOMContentLoaded

        function initializeCanvas() {
            if (!selectedProduct || !logoImage) return;
            
            document.getElementById('previewSection').style.display = 'block';
            
            if (canvas) {
                canvas.dispose();
            }
            
            canvas = new fabric.Canvas('customizationCanvas');
            
            // Load product image
            fabric.Image.fromURL(selectedProduct.image, function(img) {
                // Set canvas size to match image dimensions (with max limits for UI)
                const maxWidth = 800;
                const maxHeight = 600;
                const canvasScale = Math.min(maxWidth / img.width, maxHeight / img.height, 1); // Don't scale up
                
                const canvasWidth = Math.round(img.width * canvasScale);
                const canvasHeight = Math.round(img.height * canvasScale);
                
                // Resize canvas to match scaled image
                canvas.setDimensions({
                    width: canvasWidth,
                    height: canvasHeight
                });
                
                img.scale(canvasScale);
                img.set({
                    left: 0,
                    top: 0,
                    selectable: false,
                    evented: false,
                });
                
                productImage = img;
                canvas.add(img);
                
                // Add printable area overlay - scale the admin-defined coordinates and apply perspective
                const area = selectedProduct.printableArea;
                printableArea = new fabric.Rect({
                    left: area.left * canvasScale,
                    top: area.top * canvasScale,
                    width: (area.originalWidth || area.width) * canvasScale,
                    height: (area.originalHeight || area.height) * canvasScale,
                    angle: area.angle || 0,  // Apply the perspective/angle from admin
                    scaleX: area.scaleX || 1,
                    scaleY: area.scaleY || 1,
                    fill: 'rgba(0, 255, 0, 0.2)',
                    stroke: 'green',
                    strokeWidth: 2,
                    selectable: false,
                    evented: false,
                    excludeFromExport: true  // This will exclude it from preview generation
                });
                
                canvas.add(printableArea);
                
                // Store the scale for coordinate calculations
                canvas.imageScale = canvasScale;
                
                // Set up canvas event listeners
                setupCanvasEvents();
                
                // Add logo
                addLogoToCanvas();
                
                canvas.renderAll();
            });
        }

        function addLogoToCanvas() {
            if (!logoImage || !printableArea) return;
            
            // Remove existing logo if any
            const existingLogo = canvas.getObjects().find(obj => obj.type === 'image' && obj !== productImage);
            if (existingLogo) {
                canvas.remove(existingLogo);
            }
            
            // Clone and configure logo
            logoImage.clone(function(clonedLogo) {
                // Scale logo to fit within printable area
                const areaWidth = printableArea.width * printableArea.scaleX;
                const areaHeight = printableArea.height * printableArea.scaleY;
                const maxWidth = areaWidth * 0.8;
                const maxHeight = areaHeight * 0.8;
                const scale = Math.min(maxWidth / clonedLogo.width, maxHeight / clonedLogo.height);
                
                clonedLogo.scale(scale);
                clonedLogo.set({
                    left: printableArea.left,
                    top: printableArea.top,
                    angle: printableArea.angle || 0,  // Match the printable area's perspective
                    selectable: true,
                    evented: true
                });
                
                // Constrain logo movement and scaling to printable area
                clonedLogo.on('moving', function() {
                    // Don't constrain during movement, only after
                });
                
                clonedLogo.on('scaling', function() {
                    // Don't constrain during scaling, only after
                });
                
                clonedLogo.on('rotating', function() {
                    // Don't constrain during rotation, only after
                });
                
                clonedLogo.on('modified', function() {
                    // Constrain after any modification is complete
                    constrainToArea(this);
                });
                
                canvas.add(clonedLogo);
                canvas.setActiveObject(clonedLogo);
                canvas.renderAll();
                
                updateCoordinates();
            });
        }

        function constrainToArea(obj) {
            const area = printableArea;
            
            // For rotated areas, we need to be more flexible with constraints
            // Get both object and area bounding rectangles
            const objBounds = obj.getBoundingRect();
            const areaBounds = area.getBoundingRect();
            
            // Calculate how much the object extends beyond the area bounds
            let deltaLeft = 0, deltaTop = 0, deltaRight = 0, deltaBottom = 0;
            
            if (objBounds.left < areaBounds.left) {
                deltaLeft = areaBounds.left - objBounds.left;
            }
            if (objBounds.top < areaBounds.top) {
                deltaTop = areaBounds.top - objBounds.top;
            }
            if (objBounds.left + objBounds.width > areaBounds.left + areaBounds.width) {
                deltaRight = (objBounds.left + objBounds.width) - (areaBounds.left + areaBounds.width);
            }
            if (objBounds.top + objBounds.height > areaBounds.top + areaBounds.height) {
                deltaBottom = (objBounds.top + objBounds.height) - (areaBounds.top + areaBounds.height);
            }
            
            // Apply corrections to the object's center position
            if (deltaLeft > 0 || deltaRight > 0 || deltaTop > 0 || deltaBottom > 0) {
                obj.set({
                    left: obj.left + deltaLeft - deltaRight,
                    top: obj.top + deltaTop - deltaBottom
                });
            }
            
            // Constrain scaling - ensure scaled logo doesn't exceed printable area bounds
            const areaWidth = areaBounds.width;
            const areaHeight = areaBounds.height;
            const objWidth = objBounds.width;
            const objHeight = objBounds.height;
            
            if (objWidth > areaWidth || objHeight > areaHeight) {
                const maxScaleX = (areaWidth * 0.9) / obj.width;
                const maxScaleY = (areaHeight * 0.9) / obj.height;
                const maxScale = Math.min(maxScaleX, maxScaleY);
                
                obj.set({
                    scaleX: Math.min(obj.scaleX, maxScale),
                    scaleY: Math.min(obj.scaleY, maxScale)
                });
            }
            
            // Force canvas to update
            canvas.renderAll();
            updateCoordinates();
        }

        function updateCoordinates() {
            const logo = canvas.getObjects().find(obj => obj.type === 'image' && obj !== productImage);
            if (logo && selectedProduct && canvas.imageScale) {
                // Convert canvas coordinates back to original image coordinates
                const scale = canvas.imageScale;
                const coordinates = {
                    x: (logo.left - productImage.left) / scale,
                    y: (logo.top - productImage.top) / scale,
                    width: (logo.width * logo.scaleX) / scale,
                    height: (logo.height * logo.scaleY) / scale,
                    scaleX: logo.scaleX,
                    scaleY: logo.scaleY,
                    angle: logo.angle || 0,  // Logo's rotation angle
                    
                    // Include printable area perspective for reference
                    printableAreaAngle: selectedProduct.printableArea.angle || 0,
                    relativeAngle: (logo.angle || 0) - (selectedProduct.printableArea.angle || 0)  // Relative to printable area
                };
                
                document.getElementById('logoCoordinates').value = JSON.stringify(coordinates);
                
                // Debug info
                console.log('Logo coordinates with perspective:', coordinates);
                console.log('Canvas scale factor:', scale);
                console.log('Printable area perspective:', selectedProduct.printableArea.angle || 0);
            }
        }

        function resetLogo() {
            if (logoImage) {
                addLogoToCanvas();
            }
        }

        function centerLogo() {
            const logo = canvas.getObjects().find(obj => obj.type === 'image' && obj !== productImage);
            if (logo && printableArea) {
                // Center the logo within the printable area (accounting for rotation)
                logo.set({
                    left: printableArea.left,
                    top: printableArea.top,
                    angle: printableArea.angle || 0  // Match the printable area's angle
                });
                
                // Ensure it's still within bounds after centering
                constrainToArea(logo);
                canvas.renderAll();
                updateCoordinates();
            }
        }

        // Canvas event listeners - set up after canvas is initialized
        function setupCanvasEvents() {
            if (canvas) {
                // Handle object modifications
                canvas.on('object:modified', function(e) {
                    const obj = e.target;
                    if (obj && obj.type === 'image' && obj !== productImage) {
                        constrainToArea(obj);
                    }
                });
                
                // Update coordinates during movement (for real-time feedback)
                canvas.on('object:moving', function(e) {
                    const obj = e.target;
                    if (obj && obj.type === 'image' && obj !== productImage) {
                        updateCoordinates();
                    }
                });
                
                // Update coordinates during scaling
                canvas.on('object:scaling', function(e) {
                    const obj = e.target;
                    if (obj && obj.type === 'image' && obj !== productImage) {
                        updateCoordinates();
                    }
                });
                
                // Update coordinates during rotation
                canvas.on('object:rotating', function(e) {
                    const obj = e.target;
                    if (obj && obj.type === 'image' && obj !== productImage) {
                        updateCoordinates();
                    }
                });
            }
        }


    </script>
</body>
</html>