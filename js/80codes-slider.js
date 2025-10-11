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

    function getCardDimensions() {
        const tempCard = document.createElement('div');
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
        for (let i = 0; i < CLONE_FACTOR; i++) {
            combinedLocations.push(...locations);
        }
    }

    function renderTrack() {
        track.innerHTML = '';

        combinedLocations.forEach((location) => {
            const card = document.createElement('div');
            card.className = 'location-card';
            card.innerHTML = `
                <img src="${location}" alt="${location}" onerror="this.onerror=null;this.src='https://placehold.co/600x400'"/>
            `;
            track.appendChild(card);
        });

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