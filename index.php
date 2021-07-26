<?php
$url = $_SERVER["REQUEST_URI"];

switch ($url) {
    case '/projects/GBICS/en':
        header('location:' . $url . "en");
        break;
    case '/projects/GBICS/np':
        header('location:' . $url . "np");

        break;
    default:
        header('location:' . $url . "en");
        break;
}
