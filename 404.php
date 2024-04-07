<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>GearGenius - 404</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <?php
            include("head.php");
        ?>
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <?php
            include("navbar.php");
        ?>
        <!-- Navbar End -->


        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">404 Error</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">404</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- 404 Start -->
        <div class="container-fluid py-5">
            <div class="container py-5 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <i class="bi bi-exclamation-triangle display-1 text-secondary"></i>
                        <h1 class="display-1">404</h1>
                        <h1 class="mb-4">Page Not Found</h1>
                        <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                        <a class="btn border-secondary rounded-pill py-3 px-5" href="index.php">Go Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 End -->

        <!-- Footer Start -->
        <?php
            include("footer.php");
        ?>
        <!-- Footer End -->
        
    <!-- JavaScript Libraries -->
    <?php
        include("jslib.php")
    ?>
    <!-- JavaScript end of Libraries -->
    
    </body>

</html>