<?php
error_reporting(E_ALL); // Enable error reporting
ini_set('display_errors', 1); // Display errors

// Define the recipient email
$to = 'mta.tours.marrakech@gmail.com';

// Check if the form data was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $transferFrom = $_POST['transfer-from'] ?? 'Not provided';
    $transferTo = $_POST['transfer-to'] ?? 'Not provided';
    $dateArrival = $_POST['dateArrival'] ?? 'Not provided';
    $formattedDate = date('j F, D', strtotime($dateArrival));
    $timeArrival = $_POST['timeArrival'] ?? 'Not provided';
    $passengers = $_POST['passengers'] ?? 'Not provided';
    $flightNumber = $_POST['flight-number'] ?? 'Not provided';
    $fullName = $_POST['fullName'] ?? 'Not provided';
    $phone = $_POST['phone'] ?? 'Not provided';
    $email = $_POST['email'] ?? 'Not provided';

    // Create the email subject and body
    $subject = 'Form Submission';
    $message = "
        Transfer From: $transferFrom\n
        Transfer To: $transferTo\n
        Date of Arrival: $formattedDate\n
        Time of Arrival: $timeArrival\n
        Passengers: $passengers\n
        Flight Number: $flightNumber\n
        Full Name: $fullName\n
        Phone: $phone\n
        Email: $email\n
    ";

    // Additional headers
    $headers = "From: no-reply@marrakech-tours-airoport.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "No data received.";
}
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <!-- Bootstrap Icon CSS -->
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
    <!-- Fontawesome all CSS -->
    <link href="assets/css/all.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <!-- FancyBox CSS -->
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">

    <!-- Fontawesome CSS -->
    <link href="assets/css/fontawesome.min.css" rel="stylesheet">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/daterangepicker.css">
    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- BoxIcon  CSS -->
    <link href="assets/css/boxicons.min.css" rel="stylesheet">
    <!-- Select2  CSS -->
    <link href="assets/css/select2.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <!--  Style CSS  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Title -->
    <title>TripRex - Tour & Travel Agency HTML Template</title>
    <link rel="icon" href="assets/img/sm-logo.svg" type="image/gif" sizes="20x20">
</head>

<body>

    <!-- Sidebar Menu -->
    <?php include 'includes/preloader.php'; ?>
    <!-- Sidebar Menu -->
    <?php include 'includes/menu/right-sidebar.php'; ?>
    <!-- Login Modal -->
    <div class="modal login-modal" id="user-login" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-clode-btn" data-bs-dismiss="modal"></div>
                <div class="modal-header">
                    <img src="assets/img/home1/login-modal-header-img.jpg" alt="">
                </div>
                <div class="modal-body">
                    <div class="login-registration-form">
                        <div class="form-title">
                            <h2>Sign in to continue</h2>
                            <p>Enter your email address for Login.</p>
                        </div>
                        <form>
                            <div class="form-inner mb-20">
                                <input type="text" placeholder="User name or Email *">
                            </div>
                            <a href="#" class="login-btn mb-25">Sign In</a>
                            <div class="divider">
                                <span>or</span>
                            </div>
                            <a href="#" class="google-login-btn">
                                <div class="icon">
                                    <img src="assets/img/home1/icon/google-icon.svg" alt="">
                                </div>
                                Sign in with Google
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="top-bar style-2">
        <div class="topbar-left">
            <a href="https://www.tripadvisor.com/" class="rating-area">
                <div class="icon">
                    <img src="assets/img/home3/icon/tripadvisor-sm-logo.svg" alt="">
                </div>
                <div class="content">
                    <div class="text-logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="74" height="13" viewBox="0 0 74 13">
                            <path
                                d="M72.7984 9.83446C72.5042 9.83446 72.2653 10.068 72.2653 10.3556C72.2653 10.6432 72.5042 10.8768 72.7984 10.8768C73.0924 10.8768 73.3314 10.6432 73.3314 10.3556C73.3314 10.068 73.0924 9.83446 72.7984 9.83446ZM72.7984 10.7941C72.5504 10.7941 72.3498 10.5969 72.3498 10.3556C72.3498 10.1132 72.5515 9.91711 72.7984 9.91711C73.0463 9.91711 73.248 10.1143 73.248 10.3556C73.248 10.5969 73.0463 10.7941 72.7984 10.7941ZM72.9719 10.2664C72.9719 10.1716 72.9031 10.1154 72.8017 10.1154H72.6315V10.5903H72.7149V10.4184H72.8062L72.8941 10.5903H72.9842L72.8873 10.4008C72.9392 10.3777 72.9719 10.3314 72.9719 10.2664ZM72.7984 10.3446H72.7161V10.1871H72.7984C72.8547 10.1871 72.8885 10.2146 72.8885 10.2653C72.8885 10.3171 72.8536 10.3446 72.7984 10.3446ZM8.57267 4.55998V3.29949H6.5961V10.7985H8.57267V6.30201C8.57267 5.48774 9.10683 5.08776 9.93962 5.08776H11.0215V3.29952H10.0974C9.37391 3.29949 8.7451 3.6686 8.57267 4.55998ZM12.873 0.333374C12.1968 0.333374 11.6784 0.85565 11.6784 1.51675C11.6784 2.16242 12.1968 2.68469 12.873 2.68469C13.5491 2.68469 14.0675 2.16242 14.0675 1.51675C14.0674 0.855623 13.5491 0.333374 12.873 0.333374ZM11.8869 10.7986H13.859V3.29949H11.8869V10.7986ZM23.2528 7.04902C23.2528 9.18987 21.478 10.9253 19.2884 10.9253C18.4049 10.9253 17.6037 10.6421 16.9613 10.1639V13H14.9892V3.29949H16.9613V3.93413C17.6037 3.45594 18.4049 3.17278 19.2884 3.17278C21.478 3.17278 23.2528 4.90817 23.2528 7.04902ZM21.2684 7.04902C21.2684 5.8866 20.3038 4.94341 19.1149 4.94341C17.926 4.94341 16.9613 5.8866 16.9613 7.04902C16.9613 8.21146 17.926 9.15462 19.1149 9.15462C20.3038 9.15462 21.2684 8.21257 21.2684 7.04902ZM57.5288 6.39124L56.3782 6.08272C55.621 5.88989 55.3268 5.66291 55.3268 5.27177C55.3268 4.89053 55.7415 4.62389 56.3343 4.62389C56.8989 4.62389 57.3417 4.98529 57.3417 5.44805V5.49101H59.1594V5.44805C59.1594 4.08727 58.0246 3.17275 56.3343 3.17275C54.6609 3.17275 53.4449 4.08616 53.4449 5.34555C53.4449 6.32509 54.1086 7.06331 55.2671 7.36961L56.3692 7.66381C57.2065 7.89078 57.5175 8.14202 57.5175 8.59268C57.5175 9.06758 57.0679 9.38709 56.3985 9.38709C55.7009 9.38709 55.231 8.95515 55.231 8.3139V8.27092H53.3018V8.3139C53.3018 9.85207 54.5684 10.9274 56.3828 10.9274C58.1306 10.9274 59.3995 9.87742 59.3995 8.4318C59.3994 7.72222 59.0749 6.79451 57.5288 6.39124ZM30.2487 3.29949H32.2207V10.7985H30.2487V10.1639C29.6063 10.6421 28.8051 10.9253 27.9216 10.9253C25.7321 10.9253 23.9572 9.18987 23.9572 7.04899C23.9572 4.90811 25.7321 3.17275 27.9216 3.17275C28.8051 3.17275 29.6064 3.45592 30.2487 3.9341V3.29949ZM30.2487 7.04902C30.2487 5.88549 29.2841 4.94341 28.0952 4.94341C26.9063 4.94341 25.9417 5.8866 25.9417 7.04902C25.9417 8.21146 26.9063 9.15462 28.0952 9.15462C29.2852 9.15462 30.2487 8.21257 30.2487 7.04902ZM39.3417 0.630862H41.3138V10.7996H39.3417V10.165C38.6993 10.6432 37.8981 10.9264 37.0146 10.9264C34.825 10.9264 33.0502 9.19097 33.0502 7.05009C33.0502 4.90922 34.825 3.17385 37.0146 3.17385C37.8981 3.17385 38.6993 3.45702 39.3417 3.93521V0.630862ZM39.3417 7.04902C39.3417 5.8866 38.377 4.94341 37.1881 4.94341C35.9993 4.94341 35.0346 5.8866 35.0346 7.04902C35.0346 8.21146 35.9981 9.15462 37.1881 9.15462C38.377 9.15462 39.3417 8.21257 39.3417 7.04902ZM50.4699 10.7986H52.4419V3.29949H50.4699V10.7986ZM51.4559 0.333374C50.7797 0.333374 50.2614 0.85565 50.2614 1.51675C50.2614 2.16242 50.7797 2.68469 51.4559 2.68469C52.132 2.68469 52.6504 2.16242 52.6504 1.51675C52.6504 0.855623 52.132 0.333374 51.4559 0.333374ZM67.9233 7.04902C67.9233 9.18987 66.1485 10.9253 63.9589 10.9253C61.7693 10.9253 59.9944 9.18989 59.9944 7.04902C59.9944 4.90814 61.7693 3.17278 63.9589 3.17278C66.1485 3.17278 67.9233 4.90817 67.9233 7.04902ZM66.1124 7.04902C66.1124 5.8866 65.1478 4.94341 63.9589 4.94341C62.77 4.94341 61.8054 5.8866 61.8054 7.04902C61.8054 8.21146 62.7689 9.15462 63.9589 9.15462C65.1478 9.15462 66.1124 8.21257 66.1124 7.04902ZM7.56295 0.630862H-0.00195312V2.35083H2.79842V10.7985H4.76374V2.35083H7.56411V0.630862H7.56295ZM45.8203 8.74474L44.0657 3.29952H41.9944L44.6257 10.7986H46.999L49.6461 3.29952H47.5748L45.8203 8.74474ZM70.8127 4.55998V3.29949H68.8361V10.7985H70.8127V6.30201C70.8127 5.48774 71.3469 5.08776 72.1796 5.08776H73.2615V3.29952H72.3374C71.6139 3.29949 70.9863 3.6686 70.8127 4.55998Z" />
                        </svg>
                    </div>
                    <div class="rating">
                        <ul>
                            <li><i class="bi bi-circle-fill"></i></li>
                            <li><i class="bi bi-circle-fill"></i></li>
                            <li><i class="bi bi-circle-fill"></i></li>
                            <li><i class="bi bi-circle-fill"></i></li>
                            <li><i class="bi bi-circle-half"></i></li>
                        </ul>
                        <span>4.5/5.0</span>
                    </div>
                </div>
            </a>
        </div>
        <p>50% Off Your Next Trip. Hurry Up For your new Tour! <a href="package-grid.html">Book Your Tour</a> </p>
        <div class="topbar-right">
            <div class="social-icon-area">
                <ul>
                    <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                    <li><a href="https://twitter.com/"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                <path
                                    d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
                            </svg></a></li>
                    <li><a href="https://www.linkedin.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Start header section -->
    <?php include 'includes/menu/header.php'; ?>
    <!-- End header section -->

    <!-- <div class="breadcrumb-section"
        style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, 0.3) 101.02%), url(assets/img/innerpage/inner-banner-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="banner-content">
                        <h1>Checkout</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="index.html">Home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container">
        <?php include 'includes/banner/banner-advantage.php'; ?>

        <div class="mt-90">
            <div class="order-header--steps">
                <div class="order-header--step">
                    <div class="order-header--step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 18 18">
                            <g fill="none" fill-rule="evenodd">
                                <path fill="#1E4C42" d="M9 18A9 9 0 1 0 9 0a9 9 0 0 0 0 18z"></path>
                                <path fill="#FFF" fill-rule="nonzero"
                                    d="M11.278 6.308a1 1 0 1 1 1.444 1.384l-3.831 4a1 1 0 0 1-1.445 0L5.278 9.428a1 1 0 0 1 1.444-1.383l1.446 1.51 3.11-3.247z">
                                </path>
                            </g>
                        </svg>
                    </div><span>TRANSFERT</span>
                </div>
                <div class="order-header--step order-header--step--current">
                    <div class="order-header--step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 18 18">
                            <g fill="none" fill-rule="evenodd">
                                <circle cx="9" cy="9" r="9" fill="#1E4C42"></circle>
                                <path fill="#FFF"
                                    d="M6.332 13a4.82 4.82 0 0 1-.088-.847c0-2.904 3.399-3.421 3.399-4.554 0-.55-.44-.781-.847-.781-.748 0-1.166.836-1.166.836L6.2 6.697s.726-1.694 2.772-1.694c1.287 0 2.684.737 2.684 2.409 0 2.453-3.168 2.926-3.223 3.938h3.344V13H6.332z">
                                </path>
                            </g>
                        </svg>
                    </div><span>INFORMATION</span>
                </div>
                <div class="order-header--step">
                    <div class="order-header--step-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 18 18">
                            <g fill="#2D3B4E" fill-opacity=".4" fill-rule="evenodd">
                                <path fill-rule="nonzero"
                                    d="M9 16A7 7 0 1 0 9 2a7 7 0 0 0 0 14zm0 2A9 9 0 1 1 9 0a9 9 0 0 1 0 18z"></path>
                                <path
                                    d="M6.2 11.964l.925-1.485s.704.705 1.617.705c.714 0 1.121-.352 1.121-.781 0-.617-.615-.87-1.463-.87h-.55L7.445 8.6l1.033-1.244c.374-.45.682-.737.682-.737v-.022s-.253.056-.748.056h-1.88v-1.65h4.96V6.2L9.896 8.037c1.166.252 1.903 1.176 1.903 2.277 0 1.341-.945 2.684-2.915 2.684-1.76 0-2.684-1.035-2.684-1.035z">
                                </path>
                            </g>
                        </svg>
                    </div><span>CONFIRMATIOn</span>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Checkout section -->
    <div class="checkout-page pt-50 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-8">
                    <div class="inquiry-form">
                        <div class="title">
                            <h4>Billing Information</h4>
                        </div>
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-inner mb-30">
                                        <label>Full Name*</label>
                                        <input type="text" name="fullName" placeholder="Jackson Mile">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-30">
                                        <label>Phone*</label>
                                        <input type="text" name="phone" placeholder="Ex- +880-13* ** ***">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-inner mb-30">
                                        <label>Email (Optional)</label>
                                        <input type="email" name="email" placeholder="Ex- info@gmail.com">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-inner">
                                        <label class="containerss">
                                            <input type="checkbox" name="agree">
                                            <span class="checkmark"></span>
                                            <span class="text">I agree to receive status updates by e-mail and
                                                SMS</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button style="padding: 6px 38px; border-radius: 6px; display: flex; margin-left: auto;"
                                class="btn-submit" type="submit">Book now</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="inquiry-form">
                        <div class="title">
                            <h4>Order Summary</h4>
                        </div>
                        <div class="d-flex row dateArrival">
                            <svg class="date-icon" xmlns="http://www.w3.org/2000/svg" fill="#000000" width="14px"
                                height="14px    " viewBox="0 0 24 24">
                                <path
                                    d="M6,22H18a3,3,0,0,0,3-3V7a2,2,0,0,0-2-2H17V3a1,1,0,0,0-2,0V5H9V3A1,1,0,0,0,7,3V5H5A2,2,0,0,0,3,7V19A3,3,0,0,0,6,22ZM5,12.5a.5.5,0,0,1,.5-.5h13a.5.5,0,0,1,.5.5V19a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1Z" />
                            </svg>
                            <p class="dateSummary"><?= htmlspecialchars($formattedDate) ?></p>
                            <p class="dateSummary">- <?= htmlspecialchars($timeArrival) ?></p>
                            <a href="/">
                                <p class="modify">Modify</p>
                            </a>
                        </div>
                        <div class="order-details-transfer-info order-details-transfer-info__destinations"
                            style="margin-top: 1em;">
                            <div class="destination-row">
                                <div class="destination-row__name">
                                    <div class="body-14 destination-title" data-quote-from-location="">
                                        <?= htmlspecialchars($transferFrom) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="destination-row destination-row--to">
                                <div class="body-14 destination-title">
                                    <?= htmlspecialchars($transferTo) ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin: 2em 0;">
                            <div class="row">
                                <div class="col-md-3">
                                    <svg fill="#100c0875" xmlns="http://www.w3.org/2000/svg" width="26px" height="26px"
                                        viewBox="0 0 20 20" version="1.1">

                                        <g id="layer1">

                                            <path
                                                d="M 9.5 0 C 8.1252105 0 7 1.1252105 7 2.5 C 7 3.0633617 7.1940199 3.5807403 7.5117188 4 L 7.5 4 C 6.1252115 4 5 5.12521 5 6.5 L 5 10.5 C 5 11.702941 5.8636264 12.715051 7 12.949219 L 7 18.5 C 7 19.328427 7.6715729 20 8.5 20 L 10.5 20 C 11.328427 20 12 19.328427 12 18.5 L 12 18 L 11 18 L 11 18.5 C 11 18.776142 10.776142 19 10.5 19 L 10 19 L 10 13.5 C 10 13.223858 9.7761424 13 9.5 13 C 9.2238576 13 9 13.223858 9 13.5 L 9 19 L 8.5 19 C 8.2238576 19 8 18.776142 8 18.5 L 8 7.5 C 8 7.2238576 7.7761424 7 7.5 7 C 7.2238576 7 7 7.2238576 7 7.5 L 7 11.910156 C 6.4161964 11.705514 6 11.157682 6 10.5 L 6 6.5 C 6 5.66565 6.6656505 5 7.5 5 L 7.5117188 5 C 8.0640035 5 8.5117188 4.5522847 8.5117188 4 C 8.5111563 3.7827376 8.4403749 3.5712202 8.28125 3.3574219 C 8.1221251 3.1436236 8 2.8417718 8 2.5 C 8 1.6656505 8.6656505 1 9.5 1 C 10.33435 1 11 1.6656505 11 2.5 C 11 2.8417718 10.877896 3.1436223 10.71875 3.3574219 C 10.559605 3.5712214 10.488843 3.7827376 10.488281 4 C 10.488281 4.5522847 10.935996 5 11.488281 5 L 11.5 5 C 12.33435 5 13 5.66565 13 6.5 L 13 10.5 C 13 11.157682 12.583804 11.705514 12 11.910156 L 12 7.5 C 12 7.2238576 11.776142 7 11.5 7 C 11.223858 7 11 7.2238576 11 7.5 L 11 15 L 12 15 L 12 12.949219 L 12.001953 12.949219 C 13.138186 12.715051 14 11.702941 14 10.5 L 14 6.5 C 14 5.12521 12.874789 4 11.5 4 L 11.488281 4 C 11.805983 3.5807403 12 3.0633617 12 2.5 C 12 1.1252105 10.87479 0 9.5 0 z M 4.5 1 C 4.285138 1.0000001 4.0801864 1.0362656 3.8808594 1.0878906 C 3.8543284 1.0951006 3.8289194 1.1032691 3.8027344 1.1113281 C 3.6122454 1.16746 3.4326019 1.2442769 3.2636719 1.3417969 C 2.5137879 1.7746902 2 2.5766257 2 3.5 C 2 4.0633617 2.1940148 4.5807403 2.5117188 5 L 2.5 5 C 1.125211 5 0 6.12521 0 7.5 L 0 10.5 C 0 11.702941 0.8619078 12.715051 1.9980469 12.949219 L 2 12.949219 L 2 16.5 C 2 17.328427 2.671573 18 3.5 18 L 5 18 L 6 18 L 6 17 L 5 17 L 5 14.910156 L 5 13.5 C 5 13.223858 4.776142 13 4.5 13 C 4.223858 13 4 13.223858 4 13.5 L 4 17 L 3.5 17 C 3.223858 17 3 16.776142 3 16.5 L 3 8.5 C 3 8.2238576 2.776142 8 2.5 8 C 2.223858 8 2 8.2238576 2 8.5 L 2 11.910156 C 1.416196 11.705514 1 11.157682 1 10.5 L 1 7.5 C 1 6.66565 1.66565 6 2.5 6 L 2.5117188 6 C 3.0640037 6 3.5117188 5.5522848 3.5117188 5 C 3.5111454 4.782732 3.440444 4.5712218 3.28125 4.3574219 C 3.122056 4.1436221 3 3.8417718 3 3.5 C 3 2.6656506 3.66565 2 4.5 2 C 4.788118 2 5.0528871 2.081448 5.2050781 2.1738281 C 5.3572691 2.2662081 5.4473025 2.2925337 5.5390625 2.2929688 C 5.8152055 2.2929688 6.0390625 2.0691111 6.0390625 1.7929688 C 6.0390215 1.641509 5.9671356 1.5075681 5.8847656 1.4394531 C 5.8023906 1.3713371 5.7722744 1.3560969 5.7402344 1.3417969 C 5.3733144 1.128618 4.952744 1 4.5 1 z M 14.5 1 C 14.047256 1 13.626686 1.128618 13.259766 1.3417969 C 13.227726 1.3560969 13.197606 1.3713371 13.115234 1.4394531 C 13.032864 1.5075681 12.960978 1.641509 12.960938 1.7929688 C 12.960938 2.0691111 13.184795 2.2929688 13.460938 2.2929688 C 13.552698 2.2925337 13.642731 2.2662078 13.794922 2.1738281 C 13.947113 2.0814485 14.211882 2 14.5 2 C 15.33435 2 16 2.6656505 16 3.5 C 16 3.8417718 15.877944 4.1436221 15.71875 4.3574219 C 15.559556 4.5712218 15.488854 4.782732 15.488281 5 C 15.488281 5.5522847 15.935996 6 16.488281 6 L 16.5 6 C 17.33435 6 18 6.66565 18 7.5 L 18 10.5 C 18 11.157682 17.583804 11.705514 17 11.910156 L 17 8.5 C 17 8.2238576 16.776142 8 16.5 8 C 16.223858 8 16 8.2238576 16 8.5 L 16 12 L 16.5 12 L 16.914062 12 L 17.630859 12.716797 C 18.438651 12.301121 19 11.466383 19 10.5 L 19 7.5 C 19 6.12521 17.874789 5 16.5 5 L 16.488281 5 C 16.805987 4.5807403 17 4.0633617 17 3.5 C 17 2.5766256 16.486212 1.7746902 15.736328 1.3417969 C 15.567398 1.2442766 15.387755 1.1674598 15.197266 1.1113281 C 15.171081 1.1032638 15.145672 1.0950959 15.119141 1.0878906 C 14.919814 1.0362653 14.714862 1 14.5 1 z M 15 13 L 18 16 L 11 16 L 11 17 L 18 17 L 15 20 L 16.5 20 L 20 16.5 L 16.5 13 L 15 13 z "
                                                style="fill:#100c0875; fill-opacity:1; stroke:none; stroke-width:0px;" />

                                        </g>

                                    </svg>
                                    <?= htmlspecialchars($passengers) ?>
                                </div>
                                <div class="col-md-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26px" height="26px"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" fill="#100c0875" version="1.1"
                                        id="Layer_1" viewBox="0 0 290.626 290.626" xml:space="preserve">
                                        <g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M126.563,70.313H98.438v-56.25C98.438,6.309,92.128,0,84.375,0H56.25c-7.753,0-14.063,6.309-14.063,14.063v56.25H14.063     C6.309,70.313,0,76.622,0,84.375v168.75c0,5.297,2.977,9.862,7.312,12.258c-1.645,2.559-2.625,5.578-2.625,8.836     c0,9.047,7.359,16.406,16.406,16.406S37.5,283.266,37.5,274.219c0-2.527-0.623-4.894-1.645-7.031h68.916     c-1.022,2.138-1.645,4.505-1.645,7.031c0,9.047,7.359,16.406,16.406,16.406s16.406-7.359,16.406-16.406     c0-3.258-0.98-6.277-2.625-8.836c4.336-2.395,7.313-6.961,7.313-12.258V84.375C140.625,76.622,134.316,70.313,126.563,70.313z      M51.563,14.063c0-2.588,2.099-4.688,4.687-4.688h28.125c2.588,0,4.688,2.1,4.688,4.688v4.688h-37.5V14.063z M51.563,28.125h37.5     v42.188h-37.5V28.125z M9.375,84.375c0-2.588,2.1-4.687,4.688-4.687h4.688V93.75H9.375V84.375z M9.374,253.125v-9.375h0.001     h9.375v14.063h-4.688C11.474,257.813,9.374,255.713,9.374,253.125z M21.094,281.25c-3.876,0-7.031-3.155-7.031-7.031     c0-3.876,3.155-7.031,7.031-7.031s7.031,3.154,7.031,7.031S24.97,281.25,21.094,281.25z M119.531,281.25     c-3.877,0-7.031-3.155-7.031-7.031c0-3.876,3.155-7.031,7.031-7.031s7.031,3.155,7.031,7.031     C126.562,278.095,123.408,281.25,119.531,281.25z M131.25,253.125c0,2.587-2.1,4.688-4.687,4.688h-4.688V243.75h9.375V253.125z      M131.25,234.375h-9.375c-5.17,0-9.375,4.205-9.375,9.375v14.063H28.125V243.75c0-5.17-4.205-9.375-9.375-9.375H9.375v-131.25     h9.375c5.17,0,9.375-4.205,9.375-9.375V79.688h14.063h56.25H112.5V93.75c0,5.17,4.205,9.375,9.375,9.375h9.375V234.375z      M131.25,93.75h-9.375V79.688h4.688c2.587,0,4.687,2.099,4.687,4.687V93.75z" />
                                                    <rect x="23.438" y="112.5" width="9.375" height="112.5" />
                                                    <rect x="46.875" y="112.5" width="9.375" height="112.5" />
                                                    <rect x="107.813" y="112.5" width="9.375" height="112.5" />
                                                    <rect x="84.375" y="112.5" width="9.375" height="112.5" />
                                                    <path
                                                        d="M276.563,112.5h-112.5c-7.753,0-14.063,6.309-14.063,14.063v126.563c0,5.297,2.977,9.862,7.313,12.258     c-1.645,2.559-2.625,5.578-2.625,8.836c0,9.047,7.359,16.406,16.406,16.406s16.406-7.359,16.406-16.406     c0-2.527-0.623-4.894-1.645-7.031h68.916c-1.022,2.138-1.645,4.505-1.645,7.031c0,9.047,7.359,16.406,16.406,16.406     s16.406-7.359,16.406-16.406c0-3.258-0.98-6.277-2.625-8.836c4.336-2.395,7.313-6.961,7.313-12.258V126.563     C290.625,118.809,284.316,112.5,276.563,112.5z M171.094,281.25c-3.876,0-7.031-3.155-7.031-7.031     c0-3.876,3.155-7.031,7.031-7.031c3.876,0,7.031,3.154,7.031,7.031S174.97,281.25,171.094,281.25z M269.531,281.25     c-3.877,0-7.031-3.155-7.031-7.031c0-3.876,3.155-7.031,7.031-7.031c3.876,0,7.031,3.155,7.031,7.031     C276.562,278.095,273.408,281.25,269.531,281.25z M281.248,253.125c0.002,2.587-2.098,4.688-4.685,4.688h-112.5     c-2.587,0-4.688-2.1-4.688-4.688v-95.784l8.067-4.842c7.838-4.702,16.814-7.186,25.955-7.186h39.164l-2.63,7.894     c-0.82,2.456,0.506,5.114,2.962,5.93c0.492,0.159,0.994,0.239,1.481,0.239c1.964,0,3.792-1.242,4.444-3.206l3.619-10.856h2.62     l3.619,10.856c0.656,1.964,2.484,3.206,4.448,3.206c0.488,0,0.989-0.08,1.481-0.244c2.452-0.816,3.783-3.469,2.962-5.93     l-2.4-7.195c6.342,1.012,12.469,3.164,18.014,6.492l8.067,4.842V253.125z M281.251,146.405l-3.239-1.945     c-8.798-5.273-18.802-8.166-29.034-8.466c-0.145-0.019-0.281-0.009-0.427-0.014c-0.441-0.005-0.881-0.042-1.322-0.042h-53.831     c-10.842,0-21.483,2.948-30.778,8.522l-3.244,1.945v-19.842c-0.001-2.588,2.099-4.688,4.687-4.688h112.5     c2.587,0,4.688,2.1,4.688,4.688V146.405z" />
                                                    <path
                                                        d="M164.063,107.813h112.5c7.753,0,14.063-6.309,14.039-14.531l-3.97-39.698c-0.534-5.334-2.025-10.467-4.416-15.263     c-7.364-14.723-22.055-23.911-38.466-24.202v-0.056C243.75,6.309,237.441,0,229.688,0h-18.75     c-7.753,0-14.063,6.309-14.063,14.063v0.056c-16.411,0.291-31.102,9.483-38.466,24.206c-2.395,4.791-3.881,9.928-4.416,15.263     L150,93.75C150,101.503,156.309,107.813,164.063,107.813z M210.938,9.375h18.75c2.587,0,4.688,2.1,4.688,4.688H206.25     C206.25,11.475,208.35,9.375,210.938,9.375z M163.322,54.52c0.422-4.195,1.589-8.236,3.473-12.005     c5.887-11.766,17.714-19.078,30.872-19.078h45.291c13.158,0,24.984,7.313,30.872,19.078c1.884,3.769,3.052,7.809,3.473,12.005     l3.947,39.23c0,2.588-2.1,4.688-4.688,4.688h-112.5c-2.587,0-4.688-2.1-4.711-4.219L163.322,54.52z" />
                                                    <path
                                                        d="M239.064,51.563h-0.001c0,2.592,2.095,4.688,4.688,4.688c2.593,0,4.688-2.095,4.688-4.688v-9.375h9.375v-9.375h-75v9.375     h56.25V51.563z" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    #<?= htmlspecialchars($flightNumber) ?>
                                </div>
                            </div>
                        </div>
                        <div class="order-details-transfer-footer">
                            <div class="order-details-transfer-footer__summary">
                                <div class="order-details-transfer-footer__labels">
                                    <h3 class="text-graphite-800 body-14 text-900">Prix total</h3>
                                    <p class="text-graphite-600 body-12">Taxes &amp; frais inclus</p>
                                </div>
                                <div class="order-details-transfer-footer__values">
                                    <div class="order-details-transfer-footer__total" data-quote-total-price=""
                                        data-price_in_eur="19">€19</div>
                                    <div class="order-details-transfer-footer__discount" data-quote-discount=""
                                        style="display: none;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Checkout section -->

    <!-- Start Banner3 section -->
    <div class="banner3-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner3-content">
                        <h2>Join The Newsletter</h2>
                        <p>To receive our best monthly deals</p>
                        <form>
                            <div class="from-inner">
                                <input type="email" placeholder="Enter Your Gmail...">
                                <button type="submit" class="from-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17">
                                        <path d="M7 1L16 8.5M16 8.5L7 16M16 8.5H0.5" stroke-width="1.5" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                        <img src="assets/img/home1/banner3-vector1.png" alt="" class="vector1">
                        <img src="assets/img/home1/banner3-vector2.png" alt="" class="vector2">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner3 section -->

    <!-- Start Footer Section -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-top">
                <div class="row g-lg-4 gy-5 justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/logo2.svg" alt=""></a>
                            </div>
                            <h3>Want <span>to Take <br></span> Tour Packages<span>?</span></h3>
                            <a href="package-grid.html" class="primary-btn1">Book A Tour</a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 d-flex justify-content-lg-center justify-content-sm-start">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h5>Quick Link</h5>
                            </div>
                            <ul class="widget-list">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="destination1.html">Destinations</a></li>
                                <li><a href="package-grid.html">Tour Package</a></li>
                                <li><a href="guide2.html">Tour Guide</a></li>
                                <li><a href="blog-grid.html">Article</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-lg-center justify-content-md-start">
                        <div class="footer-widget">
                            <div class="single-contact mb-30">
                                <div class="widget-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                        <g clip-path="url(#clip0_1139_225)">
                                            <path
                                                d="M17.5107 13.2102L14.9988 10.6982C14.1016 9.80111 12.5765 10.16 12.2177 11.3262C11.9485 12.1337 11.0514 12.5822 10.244 12.4028C8.44974 11.9542 6.0275 9.62168 5.57894 7.73772C5.3098 6.93027 5.84808 6.03314 6.65549 5.76404C7.82176 5.40519 8.18061 3.88007 7.28348 2.98295L4.77153 0.470991C4.05382 -0.156997 2.97727 -0.156997 2.34929 0.470991L0.644745 2.17553C-1.0598 3.96978 0.82417 8.72455 5.04066 12.941C9.25716 17.1575 14.0119 19.1313 15.8062 17.337L17.5107 15.6324C18.1387 14.9147 18.1387 13.8382 17.5107 13.2102Z" />
                                        </g>
                                    </svg>
                                    <h5>More Inquiry</h5>
                                </div>
                                <a href="tel:999858624984">+999-858 624 984</a>
                            </div>
                            <div class="single-contact mb-35">
                                <div class="widget-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                        <g clip-path="url(#clip0_1139_218)">
                                            <path
                                                d="M6.56266 13.2091V16.6876C6.56324 16.8058 6.60099 16.9208 6.67058 17.0164C6.74017 17.112 6.83807 17.1832 6.9504 17.22C7.06274 17.2569 7.18382 17.2574 7.29648 17.2216C7.40915 17.1858 7.5077 17.1155 7.57817 17.0206L9.61292 14.2516L6.56266 13.2091ZM17.7639 0.104306C17.6794 0.044121 17.5799 0.00848417 17.4764 0.00133654C17.3729 -0.00581108 17.2694 0.015809 17.1774 0.0638058L0.302415 8.87631C0.205322 8.92762 0.125322 9.00617 0.0722333 9.1023C0.0191447 9.19844 -0.00472288 9.30798 0.00355981 9.41749C0.0118425 9.52699 0.0519151 9.6317 0.11886 9.71875C0.185804 9.80581 0.276708 9.87143 0.380415 9.90756L5.07166 11.5111L15.0624 2.96856L7.33141 12.2828L15.1937 14.9701C15.2717 14.9963 15.3545 15.0051 15.4363 14.996C15.5181 14.9868 15.5969 14.9599 15.6672 14.9171C15.7375 14.8743 15.7976 14.8167 15.8433 14.7482C15.8889 14.6798 15.9191 14.6021 15.9317 14.5208L17.9942 0.645806C18.0094 0.543093 17.996 0.438159 17.9554 0.342598C17.9147 0.247038 17.8485 0.164569 17.7639 0.104306Z" />
                                        </g>
                                    </svg>
                                    <h5>Send Mail</h5>
                                </div>
                                <a
                                    href="https://demo-egenslab.b-cdn.net/cdn-cgi/l/email-protection#afc6c1c9c0efcad7cec2dfc3ca81ccc0c2"><span
                                        class="__cf_email__"
                                        data-cfemail="127b7c747d52776a737f627e773c717d7f">[email&#160;protected]</span></a>
                            </div>
                            <div class="single-contact">
                                <div class="widget-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                        <g clip-path="url(#clip0_1137_183)">
                                            <path
                                                d="M14.3281 3.08241C13.2357 1.19719 11.2954 0.0454395 9.13767 0.00142383C9.04556 -0.000474609 8.95285 -0.000474609 8.86071 0.00142383C6.70303 0.0454395 4.76268 1.19719 3.67024 3.08241C2.5536 5.0094 2.52305 7.32408 3.5885 9.27424L8.05204 17.4441C8.05405 17.4477 8.05605 17.4513 8.05812 17.4549C8.25451 17.7963 8.60632 18 8.99926 18C9.39216 18 9.74397 17.7962 9.94032 17.4549C9.94239 17.4513 9.9444 17.4477 9.9464 17.4441L14.4099 9.27424C15.4753 7.32408 15.4448 5.0094 14.3281 3.08241ZM8.99919 8.15627C7.60345 8.15627 6.46794 7.02076 6.46794 5.62502C6.46794 4.22928 7.60345 3.09377 8.99919 3.09377C10.3949 3.09377 11.5304 4.22928 11.5304 5.62502C11.5304 7.02076 10.395 8.15627 8.99919 8.15627Z" />
                                        </g>
                                    </svg>
                                    <h5>Address</h5>
                                </div>
                                <a
                                    href="https://www.google.com/maps/place/Egens+Lab/@23.8340712,90.3631117,17z/data=!3m1!4b1!4m6!3m5!1s0x3755c14c8682a473:0xa6c74743d52adb88!8m2!3d23.8340663!4d90.3656866!16s%2Fg%2F11rs9vlwsk?entry=ttu">House
                                    168/170, Avenue 01, Mirpur <br> DOHS, Dhaka Bangladesh</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex justify-content-lg-end justify-content-sm-end">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h5>We Are Here</h5>
                            </div>
                            <p>Quisque purus augue, facilisis andi neque idont accumsan fringilla massa. Vivamusol id
                                nibhom condimentum.</p>
                            <div class="payment-partner">
                                <div class="widget-title">
                                    <h5>Payment Partner</h5>
                                </div>
                                <div class="icons">
                                    <ul>
                                        <li><img src="assets/img/home1/icon/visa-logo.svg" alt=""></li>
                                        <li><img src="assets/img/home1/icon/stripe-logo.svg" alt=""></li>
                                        <li><img src="assets/img/home1/icon/paypal-logo.svg" alt=""></li>
                                        <li><img src="assets/img/home1/icon/woo-logo.svg" alt=""></li>
                                        <li><img src="assets/img/home1/icon/skrill-logo.svg" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row">
                    <div
                        class="col-lg-12 d-flex flex-md-row flex-column align-items-center justify-content-md-between justify-content-center flex-wrap gap-3">
                        <ul class="social-list">
                            <li>
                                <a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/"><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                        height="10" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                        <path
                                            d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
                                    </svg></a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a>
                            </li>
                        </ul>
                        <p>©Copyright 2024 TripRex | Design By <a href="https://www.egenslab.com/">Egens Lab</a></p>
                        <div class="footer-right">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

    <!--  Main jQuery  -->
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/daterangepicker.min.js"></script>
    <!-- Popper and Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!-- Swiper slider JS -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <!-- Waypoints JS -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- Counterup JS -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Isotope  JS -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Magnific-popup  JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Marquee  JS -->
    <script src="assets/js/jquery.marquee.min.js"></script>
    <!-- Select2  JS -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Select2  JS -->
    <script src="assets/js/select2.min.js"></script>

    <script src="assets/js/jquery.fancybox.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>

</body>


</html>