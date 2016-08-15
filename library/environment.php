<?php 
$environment = "development";

switch ($environment) {
    case "development":
        error_reporting(E_ALL);
        break;
    case "production":
        error_reporting('0');
        break;
    case "testing":
        error_reporting(-0);
        break;    
    default:
        error_reporting('0');
} 
?>