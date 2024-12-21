<section class="promo-carousel">
    <div class="carousel-wrapper">
        <div class="carousel-main">
            <!-- Slide 1 -->
            <div class="carousel-slide">
                <div class="carousel-content">
                    <h2 class="carousel-title">Travellers rate us highly</h2>
                    <p class="carousel-subtitle">
                        Medium 4.98 / 5&nbsp;&nbsp;&nbsp;<a href="#">3000 avis</a>
                    </p>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-slide">
                <div class="carousel-content">
                    <h2 class="carousel-title">Best drivers in Marrakech</h2>
                    <p class="carousel-subtitle">
                        We select the friendliest drivers, professional and English-speaking
                    </p>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-slide">
                <div class="carousel-content">
                    <h2 class="carousel-title">Always on time</h2>
                    <p class="carousel-subtitle">
                        Our drivers monitor flights in the event of delays
                    </p>
                </div>
            </div>
        </div>
        <!-- Thumbnails -->
        <div class="carousel-thumbnails">
            <div class="thumbnail active" data-index="0"></div>
            <div class="thumbnail" data-index="1"></div>
            <div class="thumbnail" data-index="2"></div>
        </div>
    </div>
</section>



<style>
    .promo-carousel {
        position: relative;
        max-width: 900px;
        margin: 0 auto;
        font-family: 'Arial', sans-serif;
    }

    .carousel-wrapper {
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .carousel-main {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .carousel-slide {
        min-width: 100%;
        text-align: center;
        padding: 20px;
        background: var(--primary-color1);
        color: white;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .carousel-title {
        font-size: 24px;
        font-weight: bold;
        color: white;
    }

    .carousel-subtitle {
        font-size: 16px;
        color: #64968c;
    }

    .carousel-thumbnails {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 10px;
    }

    .thumbnail {
        width: 10px;
        height: 10px;
        background: #ccc;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .thumbnail.active {
        background: var(--primary-color1);
    }

    .thumbnail:hover {
        background: #555;
    }

    .carousel-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        border-radius: 50%;
        padding: 10px;
        cursor: pointer;
        transition: opacity 0.3s ease;
    }

    .carousel-nav.prev {
        left: 10px;
    }

    .carousel-nav.next {
        right: 10px;
    }

    .carousel-nav.hidden {
        opacity: 0;
        pointer-events: none;
    }

    .promo-carousel:hover .carousel-nav {
        opacity: 1;
        pointer-events: auto;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.carousel-slide');
        const thumbnails = document.querySelectorAll('.thumbnail');
        let currentIndex = 0;
        const slideInterval = 5000; // Slide interval in milliseconds (3 seconds)

        // Function to update the carousel
        function updateCarousel(index) {
            const offset = -index * 100;
            document.querySelector('.carousel-main').style.transform = `translateX(${offset}%)`;
            thumbnails.forEach((thumb, i) => {
                thumb.classList.toggle('active', i === index);
            });
        }

        // Navigate to a specific slide on thumbnail click
        thumbnails.forEach((thumb, i) => {
            thumb.addEventListener('click', () => {
                currentIndex = i;
                updateCarousel(currentIndex);
            });
        });

        // Automatic slide change every 3 seconds
        setInterval(() => {
            currentIndex = (currentIndex + 1) % slides.length;
            updateCarousel(currentIndex);
        }, slideInterval);

        // Initialize the carousel
        updateCarousel(currentIndex);
    });
</script>