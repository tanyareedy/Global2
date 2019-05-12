<?php
$companyName = "Global  Horizon";
$companyEmail = " info@globalhorizon-cis.com";
$companyTel = " +1 705-733-4644";
$companyAddress = " 57 Adelaide St, Barrie, ON L4N 3T4, Canada";


//die(print_r($_SERVER));
//global $appUrl;
$appUrl = '//' . $_SERVER['SERVER_NAME'];
$appPort = $_SERVER['SERVER_PORT'];
if ($appPort !== 80) $appUrl .= ":" . $_SERVER['SERVER_PORT'];


function basePath($path = '')
{
    if (substr($path, 0, 1) === '/') $path = substr($path, 1);
    if (strlen($path) > 0) {
        return __DIR__ . '/' . $path;
    }
    return __DIR__;
}

function url($path = '')
{
    global $appUrl;
    if (substr($path, 0, 1) === '/') $path = substr($path, 1);
    if (strlen($path) > 0) {
        return $appUrl . '/' . $path;
    }
    return __DIR__;
}
