<div class="andyslider">
    <div class="andyslider-buttons" id="prev"><svg height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve" style="transform:rotate(180deg);">
<path fill="#231F20" d="M15.563,40.836c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293l15-15
	c0.391-0.391,0.391-1.023,0-1.414l-15-15c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l14.293,14.293L15.563,39.422
	C15.172,39.813,15.172,40.446,15.563,40.836z"/>
</svg></div>

    <div class="andyslider-wrapper">
        <ul class="andyslider-items" id="items">
        </ul>
    </div>

    <div class="andyslider-buttons" id="next"><svg height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
<path fill="#231F20" d="M15.563,40.836c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293l15-15
	c0.391-0.391,0.391-1.023,0-1.414l-15-15c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l14.293,14.293L15.563,39.422
	C15.172,39.813,15.172,40.446,15.563,40.836z"/>
</svg></div>
</div>

<style>
.andyslider {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    height: 350px;
    margin: 20px;
    /* padding: 0 10px; */
}

.andyslider-buttons {
    flex: 0 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    cursor: pointer;
    z-index: 10;
}

.andyslider-buttons i {
    font-size: 2.5em;
    width: 45px;
    height: 45px;
    line-height: 45px;
    text-align: center;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.9);
    color: #444;
    transition: all 0.2s;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
}

.andyslider-buttons:hover i {
    background-color: #fff;
    color: #111;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
}

.andyslider-wrapper {
    flex: 1;
    overflow: hidden;
    height: 100%;
    margin: 0 10px;
}

ul.andyslider-items {
    width: 100%;
    list-style-type: none;
    display: flex;
    flex-wrap: nowrap;
    column-gap: 10px;
    padding-left: 0;
    margin: 0;
    transition: transform 0.3s ease-in-out;
    height: 100%;
}

li.andyslider-item {
    flex-basis: 100%;
    flex-shrink: 0;
    padding: 0;
    box-sizing: border-box;
}

.andyslider-card {
    display: flex;
    flex-direction: column;
    row-gap: 8px;
    align-items: center;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    transition: all 0.1s linear;
    padding: 10px;
    border-radius: 8px;
    height: 100%;
    box-sizing: border-box;
    border: 2px solid #ddd;
}
.andyslider-card:hover {
    border-color: #bbb;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}

.andyslider-card strong,
.andyslider-card p {
    text-align: center;
    width: 100%;
}

.andyslider-card img {
    height: 250px;
    width: 100%;
    object-fit: contain;
    transition: transform 0.3s ease-in-out;
    border-radius: 6px;
}

.andyslider-card:hover img {
    transform: scale(1.05);
}

@media (min-width: 576px) {
    .andyslider-wrapper {
        margin: 0 15px;
    }

    li.andyslider-item {
        flex-basis: calc(50% - 5px);
    }
}

@media (min-width: 1024px) {
    .andyslider-wrapper {
        margin: 0 15px;
    }

    li.andyslider-item {
        flex-basis: calc(33.333% - 6.666px);
    }
}

@media (min-width: 1200px) {
    .andyslider-wrapper {
        margin: 0 15px;
    }

    li.andyslider-item {
        flex-basis: calc(25% - 7.5px);
    }
}
</style>

<script>
const images = [{
        img: "images/categories/apprael2.png",
        name: "Apparels",
        href: "<?php echo BASE_URL; ?>category/apparel",
        price: "100"
    },
    {
        img: "images/categories/corporategift.png",
        name: "Corporate Gifts",
        href: "<?php echo BASE_URL; ?>category/corporate-gifts",
        price: "200"
    },
    {
        img: "images/categories/customized3.png",
        name: "Customized Items",
        href: "<?php echo BASE_URL; ?>category/customized-items",
        price: "300"
    },
    {
        img: "images/categories/keychain.png",
        name: "Key Rings",
        href: "<?php echo BASE_URL; ?>category/key-rings",
        price: "200"
    },
    {
        img: "images/categories/plushtoy.png",
        name: "Plush Toys",
        href: "<?php echo BASE_URL; ?>category/plush-toys",
        price: "150"
    },
    {
        img: "images/categories/sustainability.png",
        name: "Sustainability",
        href: "<?php echo BASE_URL; ?>category/sustainability",
        price: "110"
    },

];

document.addEventListener("DOMContentLoaded", () => {
    const wrapper = document.getElementById("items");

    images.forEach(item => {
        const list = document.createElement("li");
        list.classList.add("andyslider-item");

        const card = document.createElement("div");
        card.classList.add("andyslider-card");
        
        // Add cursor pointer style to indicate clickability
        card.style.cursor = "pointer";

        const image = document.createElement("img");
        image.src = item.img;
        image.alt = item.name;

        const name = document.createElement("strong");
        name.textContent = item.name;

        // Add click event listener to the card
        card.addEventListener("click", () => {
            window.location.href = item.href;
        });

        card.appendChild(image);
        card.appendChild(name);

        list.appendChild(card);
        wrapper.appendChild(list);
    });

    let count = 0;
    const nextBtn = document.getElementById("next");
    const prevBtn = document.getElementById("prev");
    const totalItems = images.length;

    const getItemWidth = () => {
        const firstItem = wrapper.querySelector('.andyslider-item');
        if (firstItem) {
            const itemWidth = firstItem.offsetWidth;
            const gapStyle = window.getComputedStyle(wrapper);
            const columnGap = parseFloat(gapStyle.columnGap) || 0;
            return itemWidth + columnGap;
        }
        return 0;
    };

    const getVisibleItems = () => {
        const bodyWidth = window.innerWidth;
        if (bodyWidth >= 1200) return 4;
        if (bodyWidth >= 1024) return 3;
        if (bodyWidth >= 576) return 2;
        return 1;
    };

    const getMaxCount = () => {
        const visibleItems = getVisibleItems();
        return Math.max(0, totalItems - visibleItems);
    };

    const updateSlider = () => {
        const itemWidth = getItemWidth();
        const offset = -count * itemWidth;
        wrapper.style.transform = `translateX(${offset}px)`;
    };

    nextBtn.addEventListener("click", () => {
        const maxCount = getMaxCount();
        if (count < maxCount) {
            count++;
            updateSlider();
        }
    });

    prevBtn.addEventListener("click", () => {
        if (count > 0) {
            count--;
            updateSlider();
        }
    });

    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            const maxCount = getMaxCount();
            if (count > maxCount) {
                count = maxCount;
            }
            updateSlider();
        }, 200);
    });

    updateSlider();
});
</script>