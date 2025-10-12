<div class="andyslider">
    <div class="andyslider-buttons" id="prev"><i class="fas fa-caret-left"></i></div>

    <div class="andyslider-wrapper">
        <ul class="andyslider-items" id="items">
        </ul>
    </div>

    <div class="andyslider-buttons" id="next"><i class="fas fa-caret-right"></i></div>
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
        img: "uploads/products/apparel/1.png",
        name: "Apparels",
        href: "<?php echo BASE_URL; ?>category/apparel",
        price: "100"
    },
    {
        img: "uploads/products/corporate-gifts/11.png",
        name: "Corporate Gifts",
        href: "<?php echo BASE_URL; ?>category/corporate-gifts",
        price: "200"
    },
    {
        img: "uploads/products/customized-items/5.png",
        name: "Customized Items",
        href: "<?php echo BASE_URL; ?>category/customized-items",
        price: "300"
    },
    {
        img: "uploads/products/key-rings/3.png",
        name: "Key Rings",
        href: "<?php echo BASE_URL; ?>category/key-rings",
        price: "200"
    },
    {
        img: "uploads/products/plush-toys/2.png",
        name: "Plush Toys",
        href: "<?php echo BASE_URL; ?>category/plush-toys",
        price: "150"
    },
    {
        img: "uploads/products/sustainability/4.png",
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