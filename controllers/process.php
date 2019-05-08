<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mailFrom'];
    $mobileNo = $_POST['mobileNo'];
    $program = $_POST['program'];
    $message = $_POST['message'];


//    send to mail part
    $mailTo = "info@globalhorizon-cis.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have received an application email from " . $name .
        PHP_EOL.
        "my number is:".
        PHP_EOL . $mobileNo .
        PHP_EOL.
        "i want more information on".
        PHP_EOL . $program .
        PHP_EOL.
        "This is my personal message".
        PHP_EOL . $message;

    mail($mailTo, $program, $txt, $headers);
    header("Location: ../index.php?mailsent");

}





