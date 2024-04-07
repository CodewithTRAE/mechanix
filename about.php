<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>GearGenius - About Us</title>
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
            <h1 class="text-center text-white display-6">About</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Contact</li>
            </ol>
        </div>
        <!-- Single Page Header End -->

        <!-- about us start -->
<br>
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto" style="max-width: 700px;">
                    <h3 class="display-6">This is who we are</h3>
                    <p><b>As your local Mechanic in Nairobi, GearGenius take great pride in offering our 
                        clients the very best in car servicing and automotive repairs.</b></p>
                    <p>Conveniently located in nairobi, GearGenius specialise in car 
                        servicing for all makes and models, including commercial fleet vehicles
                        , four wheel drives and diesel cars.</p>
                    <p>We are conveniently located a short 10min walk to the CBD 
                        where you can also catch a bus from the interchange
                        , so it's easy to get to work after dropping off your car for service.</p>
                    <p>Commitment to high quality workmanship, ensuring the very best in automotive care. 
                        Our Business is a member of the diamond trade mark program,
                         ensuring each mechanic is kept fully up to date with modern vehicle repair methods. So rest assured, your car is in safe hands.</p>
                </div>
            </div>
        </div>

        <!-- about us start -->


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