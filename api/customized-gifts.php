<?php
include "../config.php";

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Move sendEmails function to top level (before try-catch)
function sendEmails(array $formData) {
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Api-Key: ' . MAIL_API_KEY,
            'Accept: application/json',
        ],
        CURLOPT_URL => MAIL_URL,
    ]);

    // Send email
    $payload = json_encode([
        'sender' => ['name' => '80Codes.pro Team', 'email' => 'info@aanvio.com'],
        'to' => [['name' => $formData['to']['name'], 'email' => $formData['to']['email']]],
        'subject' => $formData['subject'],
        'htmlContent' => $formData['htmlContent'],
    ]);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
    $response = curl_exec($curl);
    curl_close($curl);
    
    return $response;
}

function sendCustomerEmail($orderData) {
    $subject = "Customized Gift Request Confirmation - AANVIO";
    
    $message = "
    <html>
    <head>
        <title>Customized Gift Request Confirmation</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background-color: #568eae; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background-color: #f9f9f9; }
            .footer { background-color: #6E7A77; color: white; padding: 15px; text-align: center; }
            .preview-image { max-width: 100%; height: auto; border: 1px solid #ddd; margin: 10px 0; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>Thank You for Your Customized Gift Request!</h1>
            </div>
            <div class='content'>
                <p>Dear " . htmlspecialchars($orderData['customer']['first_name']) . ",</p>
                
                <p>We have received your customized gift request and our team will review it shortly. Here are the details:</p>
                
                <h3>Order Details:</h3>
                <ul>
                    <li><strong>Order ID:</strong> " . $orderData['id'] . "</li>
                    <li><strong>Product:</strong> " . htmlspecialchars($orderData['product']['name']) . "</li>
                    <li><strong>Quantity:</strong> " . htmlspecialchars($orderData['quantity']) . "</li>
                    <li><strong>Date:</strong> " . $orderData['timestamp'] . "</li>
                </ul>
                
                <h3>Your Contact Information:</h3>
                <ul>
                    <li><strong>Name:</strong> " . htmlspecialchars($orderData['customer']['first_name'] . ' ' . $orderData['customer']['last_name']) . "</li>
                    <li><strong>Email:</strong> " . htmlspecialchars($orderData['customer']['email']) . "</li>
                    <li><strong>Phone:</strong> " . htmlspecialchars($orderData['customer']['phone']) . "</li>
                    " . ($orderData['customer']['company'] ? "<li><strong>Company:</strong> " . htmlspecialchars($orderData['customer']['company']) . "</li>" : "") . "
                </ul>";

    if ($orderData['preview_path']) {
        $message .= "
                <h3>Your Design Preview:</h3>
                <img src='" . BASE_URL . $orderData['preview_path'] . "' alt='Design Preview' class='preview-image'>";
    }

    $message .= "
                " . ($orderData['comments'] ? "<h3>Additional Comments:</h3><p>" . htmlspecialchars($orderData['comments']) . "</p>" : "") . "
                
                <p>Our team will contact you within 24-48 hours to discuss pricing, timeline, and next steps.</p>
                
                <p>If you have any questions, please don't hesitate to contact us.</p>
                
                <p>Best regards,<br>The AANVIO Team</p>
            </div>
            <div class='footer'>
                <p>&copy; 2025 AANVIO. All rights reserved.</p>
            </div>
        </div>
    </body>
    </html>";

    $formData = [
        "to" => ["name" => $orderData['customer']['first_name'] . ' ' . $orderData['customer']['last_name'], 
                 "email" => $orderData['customer']['email']],
        "subject" => $subject,
        "htmlContent" => $message,
    ];
    
    sendEmails($formData);
    return $message;
}

function sendAdminEmail($orderData) {
    $subject = "New Customized Gift Order - " . $orderData['id'];
    
    $message = "
    <html>
    <head>
        <title>New Customized Gift Order</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background-color: #d2815f; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background-color: #f9f9f9; }
            .preview-image { max-width: 100%; height: auto; border: 1px solid #ddd; margin: 10px 0; }
            .coordinates { background-color: #e9ecef; padding: 10px; border-radius: 5px; font-family: monospace; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>New Customized Gift Order</h1>
            </div>
            <div class='content'>
                <h3>Order Information:</h3>
                <ul>
                    <li><strong>Order ID:</strong> " . $orderData['id'] . "</li>
                    <li><strong>Date:</strong> " . $orderData['timestamp'] . "</li>
                    <li><strong>Status:</strong> " . $orderData['status'] . "</li>
                </ul>
                
                <h3>Customer Details:</h3>
                <ul>
                    <li><strong>Name:</strong> " . htmlspecialchars($orderData['customer']['first_name'] . ' ' . $orderData['customer']['last_name']) . "</li>
                    <li><strong>Email:</strong> " . htmlspecialchars($orderData['customer']['email']) . "</li>
                    <li><strong>Phone:</strong> " . htmlspecialchars($orderData['customer']['phone']) . "</li>
                    " . ($orderData['customer']['company'] ? "<li><strong>Company:</strong> " . htmlspecialchars($orderData['customer']['company']) . "</li>" : "") . "
                </ul>
                
                <h3>Product Details:</h3>
                <ul>
                    <li><strong>Product:</strong> " . htmlspecialchars($orderData['product']['name']) . "</li>
                    <li><strong>Quantity:</strong> " . htmlspecialchars($orderData['quantity']) . "</li>
                </ul>";

    if ($orderData['logo_coordinates']) {
        $coords = $orderData['logo_coordinates'];
        $message .= "
                <h3>Logo Coordinates:</h3>
                <div class='coordinates'>
                    Position X: " . round($coords['x'], 2) . "px<br>
                    Position Y: " . round($coords['y'], 2) . "px<br>
                    Logo Width: " . round($coords['width'], 2) . "px<br>
                    Logo Height: " . round($coords['height'], 2) . "px<br>
                    Scale X: " . round($coords['scaleX'], 2) . "<br>
                    Scale Y: " . round($coords['scaleY'], 2) . "<br>";
        
        if (isset($coords['printable_area'])) {
            $printable = $coords['printable_area'];
            $message .= "Printable Area: " . round($printable['width'], 2) . "px × " . round($printable['height'], 2) . "px<br>";
        }
        
        $message .= "</div>";
    } else {
        $message .= "
                <h3>Logo Coordinates:</h3>
                <div class='coordinates' style='color: #d63031;'>
                    <strong>WARNING:</strong> No logo coordinates found. Logo may not be properly positioned.
                </div>";
    }

    if ($orderData['preview_path']) {
        $message .= "
                <h3>Design Preview:</h3>
                <img src='" . BASE_URL . $orderData['preview_path'] . "' alt='Design Preview' class='preview-image'>";
    }

    if ($orderData['logo_path']) {
        $message .= "
                <h3>Original Logo:</h3>
                <p><a href='" . BASE_URL . $orderData['logo_path'] . "'>Download Logo File</a></p>";
    }

    $message .= "
                " . ($orderData['comments'] ? "<h3>Customer Comments:</h3><p>" . htmlspecialchars($orderData['comments']) . "</p>" : "") . "
                
                <p><strong>Action Required:</strong> Please review this order and contact the customer within 24-48 hours.</p>
            </div>
        </div>
    </body>
    </html>";

    $formData = [
        "to" => ["name" => "Admin", "email" => "admin@aanvio.com"],
        "subject" => $subject,
        "htmlContent" => $message,
    ];
    
    sendEmails($formData);
    return $message;
}

try {
    // Validate required fields
    $required_fields = ['selected_product_id', 'first_name', 'last_name', 'email', 'phone', 'quantity'];
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            throw new Exception("Field '$field' is required");
        }
    }

    // Validate email
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Invalid email address");
    }

    // Load product data
    $productsFile = '../data/customized_products.json';
    $products = [];
    if (file_exists($productsFile)) {
        $products = json_decode(file_get_contents($productsFile), true) ?: [];
    }

    $selectedProduct = null;
    foreach ($products as $product) {
        if ($product['id'] === $_POST['selected_product_id']) {
            $selectedProduct = $product;
            break;
        }
    }

    if (!$selectedProduct) {
        throw new Exception("Selected product not found");
    }

    // Handle logo upload
    $logoPath = null;
    if (isset($_FILES['logo_upload']) && $_FILES['logo_upload']['error'] === 0) {
        $uploadDir = '../uploads/logos/';
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $fileName = time() . '_' . $_FILES['logo_upload']['name'];
        $logoPath = $uploadDir . $fileName;

        if (!move_uploaded_file($_FILES['logo_upload']['tmp_name'], $logoPath)) {
            throw new Exception("Failed to upload logo");
        }
    }

    // Debug: Log received data
    $debugData = [
        'logo_coordinates_raw' => $_POST['logo_coordinates'] ?? 'NOT_SET',
        'preview_image_data_length' => !empty($_POST['preview_image_data']) ? strlen($_POST['preview_image_data']) : 0,
        'selected_product_id' => $_POST['selected_product_id'] ?? 'NOT_SET',
        'logo_upload_status' => isset($_FILES['logo_upload']) ? $_FILES['logo_upload']['error'] : 'NO_FILE'
    ];
    
    // Log debug data to file for troubleshooting
    file_put_contents('../logs/debug_' . date('Y-m-d') . '.log', 
        date('H:i:s') . " DEBUG: " . json_encode($debugData) . "\n", 
        FILE_APPEND | LOCK_EX
    );

    // Validate and normalize logo coordinates with enhanced debugging
    $logoCoordinates = null;
    if (!empty($_POST['logo_coordinates'])) {
        $coords = json_decode($_POST['logo_coordinates'], true);
        
        // Log coordinate parsing
        file_put_contents('../logs/debug_' . date('Y-m-d') . '.log', 
            date('H:i:s') . " COORDS_PARSED: " . json_encode($coords) . "\n", 
            FILE_APPEND | LOCK_EX
        );
        
        if ($coords && is_array($coords)) {
            // Ensure coordinates are within reasonable bounds
            $logoCoordinates = [
                'x' => max(0, floatval($coords['x'] ?? 0)),
                'y' => max(0, floatval($coords['y'] ?? 0)),
                'width' => max(10, floatval($coords['width'] ?? 50)),
                'height' => max(10, floatval($coords['height'] ?? 50)),
                'scaleX' => max(0.1, min(5, floatval($coords['scaleX'] ?? 1))),
                'scaleY' => max(0.1, min(5, floatval($coords['scaleY'] ?? 1))),
                'printable_area' => $coords['printable_area'] ?? null,
                'product_id' => $coords['product_id'] ?? $_POST['selected_product_id'],
                'canvas_dimensions' => $coords['canvas_dimensions'] ?? null
            ];
            
            // If printable area is provided, ensure logo is within bounds
            if (isset($coords['printable_area']) && is_array($coords['printable_area'])) {
                $printableArea = $coords['printable_area'];
                $logoCoordinates['x'] = min($logoCoordinates['x'], $printableArea['width'] - $logoCoordinates['width']);
                $logoCoordinates['y'] = min($logoCoordinates['y'], $printableArea['height'] - $logoCoordinates['height']);
            }
            
            // Log final coordinates
            file_put_contents('../logs/debug_' . date('Y-m-d') . '.log', 
                date('H:i:s') . " COORDS_FINAL: " . json_encode($logoCoordinates) . "\n", 
                FILE_APPEND | LOCK_EX
            );
        } else {
            file_put_contents('../logs/debug_' . date('Y-m-d') . '.log', 
                date('H:i:s') . " ERROR: Invalid coordinates JSON\n", 
                FILE_APPEND | LOCK_EX
            );
        }
    } else {
        file_put_contents('../logs/debug_' . date('Y-m-d') . '.log', 
            date('H:i:s') . " WARNING: No logo coordinates provided\n", 
            FILE_APPEND | LOCK_EX
        );
    }

    // Handle preview image
    $previewPath = null;
    if (!empty($_POST['preview_image_data'])) {
        $previewDir = '../uploads/previews/';
        if (!file_exists($previewDir)) {
            mkdir($previewDir, 0777, true);
        }

        $previewFileName = time() . '_preview.png';
        $previewPath = $previewDir . $previewFileName;

        // Decode base64 image
        $imageData = str_replace('data:image/png;base64,', '', $_POST['preview_image_data']);
        $imageData = str_replace(' ', '+', $imageData);
        $decodedImage = base64_decode($imageData);

        if (!file_put_contents($previewPath, $decodedImage)) {
            throw new Exception("Failed to save preview image");
        }
        
        // Log preview image info
        file_put_contents('../logs/debug_' . date('Y-m-d') . '.log', 
            date('H:i:s') . " PREVIEW: Saved to " . $previewPath . " (" . strlen($decodedImage) . " bytes)\n", 
            FILE_APPEND | LOCK_EX
        );
    } else {
        file_put_contents('../logs/debug_' . date('Y-m-d') . '.log', 
            date('H:i:s') . " WARNING: No preview image data provided\n", 
            FILE_APPEND | LOCK_EX
        );
    }

    // Prepare order data
    $orderData = [
        'id' => uniqid(),
        'timestamp' => date('Y-m-d H:i:s'),
        'customer' => [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'company' => $_POST['company'] ?? ''
        ],
        'product' => $selectedProduct,
        'logo_path' => $logoPath ? str_replace('../', '', $logoPath) : null,
        'logo_coordinates' => $logoCoordinates,
        'preview_path' => $previewPath ? str_replace('../', '', $previewPath) : null,
        'quantity' => $_POST['quantity'],
        'comments' => $_POST['comments'] ?? '',
        'status' => 'pending',
        'debug_info' => $debugData // Add debug info to order data
    ];

    // Save order to file
    $ordersFile = '../data/customized_orders.json';
    $orders = [];
    if (file_exists($ordersFile)) {
        $orders = json_decode(file_get_contents($ordersFile), true) ?: [];
    }

    $orders[] = $orderData;
    file_put_contents($ordersFile, json_encode($orders, JSON_PRETTY_PRINT));

    // Send customer email
    $customerMailResponse = sendCustomerEmail($orderData);

    // Send admin email
    $adminEmailResponse = sendAdminEmail($orderData);

    echo json_encode([
        'success' => true, 
        'message' => 'Order submitted successfully', 
        'order_id' => $orderData['id'],
        'debug' => [
            'logo_coordinates_received' => !empty($_POST['logo_coordinates']),
            'logo_file_uploaded' => $logoPath !== null,
            'preview_generated' => $previewPath !== null,
            'coordinates_valid' => $logoCoordinates !== null
        ],
        'response' => [$customerMailResponse, $adminEmailResponse]
    ]);

} catch (Exception $e) {
    // Log errors
    file_put_contents('../logs/debug_' . date('Y-m-d') . '.log', 
        date('H:i:s') . " ERROR: " . $e->getMessage() . "\n", 
        FILE_APPEND | LOCK_EX
    );
    
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>
