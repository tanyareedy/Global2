<!doctype html>
<html lang="en">
<head>
    <title>Contact|Globalhorizon</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include('pages/layout/header.php'); ?>
    <?php  $page = 'contact'; ?>


</head>
<body>
<?php include('pages/layout/nav-bar.php'); ?>


<section class="contactImage py-6">
    <div class="container">

        <div class="col-md-10 bg-dark px-lg-6 py-3" id="countryInfo">
            <h1 class="py-2 text-white rounded"> Contact</h1>

            <div class="text-white">

                <?php
                echo "<p class='contact'> <i class=\"fas fa-envelope fa-1x\" id=\"footer-icon\"></i>". $companyEmail . "</p>";
                echo "<p class='contact'> <i class=\"fas fa-phone fa-1x\" id=\"footer-icon\"></i>". $companyTel . "</p>";

                echo "<p class='contact'> <i class=\"fas fa-building fa-1x\" id=\"footer-icon\"></i>". $companyAddress. "</p>";
                ?>


            </div>
        </div>

    </div>
</section>



<section id="contact">
    <div class="container pb-5 pt-6">
        <h1>Speak to an expert now</h1>
        <div class="row">
            <div class="col-md-6">
                <!--apply form-->

                <?php include('pages/views/form-contact.php'); ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <h1>Connect With Our International Experts</h1>

                <ul id="connectUs">
                    <li class="py-3">We are network of top law firms in each jurisdiction, so your interests are
                        protected by licenced and experienced professionals.
                    </li>
                    <li class="py-3">We combine extensive experience in both immigration solutions, and investment
                        expertise to ensure we maximize the quality of your investment, while achieving your immigration
                        needs.
                    </li>
                    <li class="py-3">We listen carefully and tailor solutions, within the limits of each program to meet
                        the specific needs of our clients.
                    </li>
                </ul>

            </div>
        </div>

    </div>


</section>



<?php include('pages/layout/footer.php'); ?>

</body>

</html>


<style>
    .contactImage {
        background-image: url("/assets/img/background/contact-image.jpg");
        background-color: #cccccc; /* Used if the image is unavailable */
        padding: 20px 0 20px 0;
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover;
    }

</style>

