<?php
// Sample dynamic data for slides
error_reporting(0); // Disable all PHP errors
ini_set('display_errors', 0); // Turn off error display

$slides = [
    [
        "image" => "assets/img/home1/home1-banner-img1.jpg",
        "title" => "Explore the Red City",
        "tag" => "Marrakech",
        "description" => "Discover the vibrant streets of Marrakech with our curated tours."
    ],
    [
        "image" => "assets/img/home1/home1-banner-img2.jpg",
        "title" => "Atlas Mountain Adventures",
        "tag" => "Atlas Mountains",
        "description" => "Experience the beauty of the Atlas Mountains with guided transfers."
    ],
    [
        "image" => "assets/img/home1/home1-banner-img3.jpg",
        "title" => "Sahara Desert Journeys",
        "tag" => "Sahara Desert",
        "description" => "Embark on unforgettable adventures into the Sahara Desert."
    ]
];
?>

<div class="home1-banner-area">
    <div class="container-fluid">
        <div class="swiper home1-banner-slider">
            <div class="swiper-wrapper">
                <?php foreach ($slides as $slide): ?>
                    <div class="swiper-slide">
                        <div class="home1-banner-wrapper"
                            style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url(<?php echo $slide['image']; ?>);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="home1-banner-content">
                                            <div class="eg-tag">
                                                <span><?php echo $slide['tag']; ?></span>
                                            </div>
                                            <h1><?php echo $slide['title']; ?></h1>
                                            <p><?php echo $slide['description']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="slider-btn-grp">
                <div class="slider-btn home1-banner-prev">
                    <i class="bi bi-arrow-left"></i>
                </div>
                <div class="slider-btn home1-banner-next">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- Fixed Booking Card -->
    <div class="fixed-booking-card">
        <div class="filter-wrapper">
            <div class="nav-buttons">
                <ul class="nav nav-pills" id="pills-tab2" role="tablist">
                    <li class="nav-item" style="width: 50%;" role="presentation">
                        <button class="nav-link active" style="border-radius: 13px 0px 0px 13px;" id="transport-tab"
                            data-bs-toggle="pill" data-bs-target="#transfer" type="button" role="tab"
                            aria-controls="transport" aria-selected="false">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M135.2 117.4L109.1 192l293.8 0-26.1-74.6C372.3 104.6 360.2 96 346.6 96L165.4 96c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32l181.2 0c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2l0 144 0 48c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-48L96 400l0 48c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-48L0 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                            </svg>
                            Transport
                        </button>
                    </li>
                    <li class="nav-item" style="width: 50%;" role="presentation">
                        <button class="nav-link" style="border-radius: 0px 13px 13px 0px;" id="tour-tab"
                            data-bs-toggle="pill" data-bs-target="#tour" type="button" role="tab" aria-controls="tour"
                            aria-selected="true">
                            <svg xmlns="http://www.w3.org/2000/svg "
                                viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152l0 270.8c0 9.8-6 18.6-15.1 22.3L416 503l0-302.6zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6l0 251.4L32.9 502.7C17.1 509 0 497.4 0 480.4L0 209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77l0 249.3L192 449.4 192 255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z" />
                            </svg>
                            Tour
                        </button>
                    </li>
            </div>
            </ul>
        </div>
        <div class="filter-group">
            <div class="tab-content" id="pills-tab2Content">
                <div class="tab-pane fade show active" id="transfer" role="tabpanel">
                    <!-- Transfer Form -->
                    <div id="form-transfer" class="form-section">
                        <h4 style="color: var(--primary-color1);">Book your transfer</h4>
                        <span style="font-size: 14px; position: relative; bottom: 1em; opacity: .8;">Please fill all
                            fields</span>
                        <form id="transfer-form" action="checkout.php" method="POST">
                            <label for="transfer-from">From *:</label>
                            <input type="text" id="transfer-from" name="transfer-from" autocomplete="off"
                                value="Marrakech Menara Airport (RAK)" />

                            <label for="transfer-to">To *:</label>
                            <input type="text" id="transfer-to" name="transfer-to" autocomplete="off"
                                value="Jemaa el-Fna, Marrakesh, Morocco" />

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label for="transfer-date">Date *:</label>
                                    <input class="input-icon" type="date" id="dateArrival" name="dateArrival">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="transfer-time">Time *:</label>
                                    <input class="input-icon" type="time" id="timeArrival" name="timeArrival">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label for="transfer-passengers">Passengers *:</label>
                                    <input class="input-icon" type="number" value="1" min="0" max="50" id="passengers"
                                        name="passengers">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="transfer-luggage">Flight Number:</label>
                                    <input class="input-icon" type="text" value="AT818" placeholder="Ex: AT010" id="flight-number"
                                        name="flight-number">
                                </div>
                            </div>

                            <button class="btn-submit" type="submit">Book now</button>
                        </form>
                        <button></button>

                    </div>
                </div>
                <div class="tab-pane fade" id="tour" role="tabpanel">
                    <!-- Tour Form -->
                    <div id="form-tour" class="form-section">
                        <h4 style="color: var(--primary-color1);">Tour Form</h4>
                        <form>
                            <label for="tour-name">Tour Name:</label>
                            <input type="text" id="tour-name" name="tour-name" />
                            <label for="tour-date">Tour Date:</label>
                            <input type="date" id="tour-date" name="tour-date" />
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    /* Banner Section */
    .home1-banner-wrapper {
        height: 400px;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        color: #fff;
        padding: 20px;
    }

    .fixed-booking-card {
        position: relative;
        bottom: 38em;
        left: 74%;
        transform: translateX(-50%);
        width: 90%;
        max-width: 400px;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-direction: column;
        gap: 20px;
        z-index: 2;
    }

    .fixed-booking-card h3 {
        text-align: center;
        margin-bottom: 10px;
    }

    .fixed-booking-card form {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    @media only screen and (max-width: 768px) {
        .fixed-booking-card {
            position: relative;
            bottom: 6em;
            left: 50%;
        }
    }
</style>

