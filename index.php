<!doctype html>
<html lang="en">
<head>
    <title>Globalhorizon</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include('pages/layout/header.php'); ?>
    <?php  $page = 'home'; ?>

</head>
<body>

<?php
$launch = false;
if ($launch = true){
     include('pages/layout/nav-bar.php');

include('pages/home.php');
 include('pages/layout/footer.php');

}
else{
    include('pages/layout/footer.php');

}

?>





</body>

</html>
