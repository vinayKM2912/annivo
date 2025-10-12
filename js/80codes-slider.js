function initLocationCarousel(locations) {
    const track = document.getElementById('carousel-track');
    const container = document.querySelector('.carousel-container');

    if (!track || !container) {
        console.error("Carousel elements not found. Please check your HTML structure.");
        return;
    }

    const scrollSpeed = 0.5;
    let animationFrameId;
    const CLONE_FACTOR = 3;
    let combinedLocations = [];
    let scrollPosition = 0;

    // Check if images are already populated in HTML (new method)
    const usePrePopulatedImages = !locations || locations.length === 0;
    let existingSlides = [];
    let extractedLocations = [];

    if (usePrePopulatedImages) {
        existingSlides = Array.from(track.querySelectorAll('.location-card'));
        if (existingSlides.length === 0) {
            console.error("No images provided and no pre-populated slides found.");
            return;
        }
        // Extract image sources from existing slides for cloning
        extractedLocations = existingSlides.map(slide => {
            const img = slide.querySelector('img');
            return img ? img.src : '';
        }).filter(src => src);

        if (extractedLocations.length === 0) {
            console.error("No valid images found in pre-populated slides.");
            return;
        }
    }

    function getCardDimensions() {
        let tempCard;
        if (usePrePopulatedImages) {
            // Use existing slide dimensions
            const firstSlide = track.querySelector('.location-card');
            if (firstSlide) {
                const cardStyle = window.getComputedStyle(firstSlide);
                const width = parseFloat(cardStyle.width);
                const height = parseFloat(cardStyle.height);
                const marginRight = parseFloat(cardStyle.marginRight);
                return { width, height, marginRight };
            }
        }

        // Fallback to old method
        tempCard = document.createElement('div');
        tempCard.className = 'location-card';
        track.appendChild(tempCard);
        const cardStyle = window.getComputedStyle(tempCard);
        const width = parseFloat(cardStyle.width);
        const height = parseFloat(cardStyle.height);
        const marginRight = parseFloat(cardStyle.marginRight);
        track.removeChild(tempCard);
        return { width, height, marginRight };
    }

    function prepareLocationsForLoop() {
        combinedLocations = [];
        const sourceLocations = usePrePopulatedImages ? extractedLocations : locations;
        for (let i = 0; i < CLONE_FACTOR; i++) {
            combinedLocations.push(...sourceLocations);
        }
    }

    function renderTrack() {
        if (usePrePopulatedImages) {
            // Clone existing slides for infinite loop
            const fragment = document.createDocumentFragment();

            combinedLocations.forEach((location) => {
                const slide = document.createElement('div');
                slide.className = 'location-card';
                slide.innerHTML = `
                    <img src="${location}" alt="Product Image" onerror="this.onerror=null;this.src='https://placehold.co/600x400'"/>
                `;
                fragment.appendChild(slide);
            });

            track.innerHTML = '';
            track.appendChild(fragment);
        } else {
            // Old method - JS generated cards
            track.innerHTML = '';

            combinedLocations.forEach((location) => {
                const card = document.createElement('div');
                card.className = 'location-card';
                card.innerHTML = `
                    <img src="${location}" alt="${location}" onerror="this.onerror=null;this.src='https://placehold.co/600x400'"/>
                `;
                track.appendChild(card);
            });
        }

        updateContainerHeight();
    }

    function updateContainerHeight() {
        const { height: cardHeight } = getCardDimensions();
        container.style.height = `${cardHeight + 40}px`;
    }

    function animateCarousel() {
        scrollPosition -= scrollSpeed;

        const { width: cardWidth, marginRight: cardMargin } = getCardDimensions();
        const fullCardWidth = cardWidth + cardMargin;
        const totalContentWidth = combinedLocations.length * fullCardWidth;

        if (scrollPosition <= -totalContentWidth / CLONE_FACTOR) {
            scrollPosition += totalContentWidth / CLONE_FACTOR;
        }

        track.style.transform = `translateX(${scrollPosition}px)`;
        animationFrameId = requestAnimationFrame(animateCarousel);
    }

    function startCarousel() {
        if (!animationFrameId) {
            animateCarousel();
        }
    }

    function stopCarousel() {
        cancelAnimationFrame(animationFrameId);
        animationFrameId = null;
    }

    function setup() {
        prepareLocationsForLoop();
        renderTrack();
        startCarousel();

        window.addEventListener('resize', () => {
            stopCarousel();
            renderTrack();
            scrollPosition = 0;
            startCarousel();
        });
    }

    setup();
}