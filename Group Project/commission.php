<?php

require('conn.php');

session_start();

if (isset($_SESSION['log_name'])) {
    $logButton = '<a class="btn btn-outline-light" style="background-color: #60ce80;" href="logout.php"><i class="fa-solid fa-right-to-bracket"></i> Logout</a>';
} else {
    $logButton = '<a class="btn btn-outline-light" style="background-color: #60ce80;" href="login.php"><i class="fa-solid fa-right-to-bracket"></i> Sign In</a>';
}

if (isset($_SESSION['log_type'])) {
    if ($_SESSION['log_type'] == "0") {
        $subButton = '<a href="subscription.php" class="btn btn-outline-light" style = "background-color:#154360;"><i class="fa-solid fa-user-plus"></i> Subscribe</a>';
    } elseif ($_SESSION['log_type'] == "1") {
        $subButton = '<a href="subExtras.php" class="btn btn-outline-light" style = "background-color:#154360;"><i class="fa-solid fa-user-plus"></i> Extras</a>';
    } elseif ($_SESSION['log_type'] == "2") {
        $subButton = '<a href="admin.php" class="btn btn-outline-light" style = "background-color:#154360;"><i class="fa-solid fa-user-plus"></i> Admin Panel</a>';
    } else {
        $subButton = '<a href="subscription.php" class="btn btn-outline-light" style = "background-color:#154360;"><i class="fa-solid fa-user-plus"></i> Subscribe</a>'; // Handle unknown user type 
    }
} else {
    $subButton = '<a href="subscription.php" class="btn btn-outline-light" style = "background-color:#154360;"><i class="fa-solid fa-user-plus"></i> Subscribe</a>'; // Handle unset log_type
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--<base href="https://www.artisanhub.com/">-->
    <title>Commission| Artisan Hub</title>
    <meta name="description" content="Artisan Hub, JohnDoe's Art Web Store & Blog">
    <meta name="keywords" content="Artisan Hub,JohnDoe,Art,Art Commission,JohnDoe's Art,Commission JohnDoe,JohnDoe's Blog,Art Blog">
    <meta name="author" content="JohnDoe">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Bootstrap CSS CDN link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Your custom CSS file -->
    <link href="styles.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body class="body">
    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-light" style="border-bottom: 7px #154360 solid;">
        <div class="container">
            <!-- Logo and Brand -->
            <a class="navbar-brand" href="index.html">
                <img src="./images/logo.png" alt="Logo" width="50" height="35">
                <b><i>Artisan Hub</i></b>
            </a>
            <!-- Toggle Button (for small screens) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Artworks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#commission">Commission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="subscription.php">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <!-- Login/Logout Button -->
                <div class="d-flex py-1" style="padding-left: 2px;">
                    <?php echo $logButton; ?>
                </div>
                <div class="d-flex py-1" style="padding-left: 2px;">
                    <?php echo $subButton; ?>
                </div>
            </div>
        </div>
    </nav>

    <section id="commission">
        <br>
        <div class="container-3 col-lg-10">
            <div class="card" style="border-width: 0px;">
                <div class="card-body">
                    <h2 class="card-title">Commission Form</h2>
                    <form>
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nameInput" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="emailInput" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="descriptionInput" class="form-label">Description of Artwork</label>
                            <textarea class="form-control" id="descriptionInput" rows="3" placeholder="Describe your artwork"></textarea>
                        </div>
                        <button type="submit" class="btn btn-reg">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
    </section>

    <section id="faq" class="bg-light py-3 py-md-5 py-xl-8">
        <div class="container">
            <div class="row gy-5 gy-lg-0">
                <div class="col-12 col-lg-6">
                    <h2 class="heading3" style="color:#154360;">Frequently Asked Questions</h2>
                    <p class="lead mb-3 container-1">We have compiled a list of common questions and answers to
                        help
                        you with the commission process. If you can't find what you're looking for, please contact us.
                        <br> <br>
                        <a href="#contact" class="btn btn-lg btn-reg float-end">Contact</a>
                    </p>

                </div>
                <div class="col-12 col-lg-6">
                    <div class="row justify-content-xl-end">
                        <div class="col-12 col-xl-11">
                            <div class="accordion accordion-flush" id="accordionExample">
                                <div class="accordion-item mb-4 shadow-sm">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How Do I Place a Commission?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>To place a Commission, fill the form as follows:</p>
                                            <ul>
                                                <li>Enter the name you want to be addressed as.</li>
                                                <li>Enter the email you want to be contacted to.</li>
                                                <li>Add a brief description of the artwork you want; The style and any
                                                    reference link if exists.</li>
                                                <li>Hit submit in the form, and wait for our team to mail you.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-4 shadow-sm">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How Long Does a Response from our team take?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                                        <div class="accordion-body">
                                            Typically within 24 hours, our team will reply to the query.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-4 shadow-sm">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            What is the payment process?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                                        <div class="accordion-body">
                                            After JohnDoe reviews your Artwork request, if its achievable you will be
                                            let know of the total Price. <br>
                                            A deposit of 50% of the total price will be required for JohnDoe to start
                                            working on the artwork. The remainder 50% is payed after the completion of
                                            the artwork.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mb-4 shadow-sm">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            How Can I Contact Customer Support?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                                        <div class="accordion-body">
                                            You can contact our customer support team by email or phone. Our email
                                            address is artisanhub.info@gmail.com and our phone number is
                                            +880-2-55668200.
                                            We are
                                            available Monday to Friday, 9am to 5pm UTC.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item shadow-sm">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            What is our refund/cancel policy?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
                                        <div class="accordion-body">
                                            We do not agree to refund the 50% fee deposited if a Commission is
                                            cancelled. JohnDoe however in special cases will consider if an artwork does
                                            not live up to her expectations.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" style="background-color: #154360; padding-top:2em; color:white; border-top: 10px double white;">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h5 class="regular">Artisan Hub</h5>
                    <p>JohnDoe's Art Web Store & Blog</p>
                    <h5 class="regular">Contact:</h5>
                    <i class="fa fa-phone"></i> +880-2-55668200<br>
                    <i class="fa fa-envelope"></i> artisanhub.info@gmail.com
                    </p>
                </div>

                <hr class="clearfix w-100 d-md-none" />

                <div class="col-md-3">
                    <div class="social-box">
                        <h5 class="regular">Follow Us:</h5>
                        <ul class="social-list">
                            <li>
                                <a href="https://www.facebook.com/artisanhub" class="btn btn-default social-icon text-white" target="_blank">
                                    <i class="fab fa-facebook"></i> Facebook
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/artisanhub" class="btn btn-default social-icon text-white" target="_blank">
                                    <i class="fab fa-twitter"></i> Twitter
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/118022124355407741002" class="btn btn-default social-icon text-white" target="_blank">
                                    <i class="fab fa-google-plus"></i> Google+
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/artisanhub" class="btn btn-default social-icon text-white" target="_blank">
                                    <i class="fab fa-instagram"></i> Instagram
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr class="clearfix w-100 d-md-none" />

                <div class="col-md-4">
                    <h5 class="regular">Newsletter</h5>
                    <p>To Stay Up-to-Date. Submit Your Email</p>
                    <div class="form-group">
                        <input type="text" class="form-control m-1" placeholder="Email Address">
                        <input type="submit" class="btn btn-outline-light m-1 float-end" value="Submit">
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div style="text-align: center; background-color: rgba(0, 0, 0, 0.2)" class="container-fluid mt-1"> &copy 2024
            Artisan
            Hub. All rights
            reserved.</div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>