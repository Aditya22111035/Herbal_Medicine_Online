<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "ecom");
define('SERVER_PATH', $_SERVER['DOCUMENT_ROOT'] . '/php/ecom/');
// define('SERVER_PATH', $_SERVER['DOCUMENT_ROOT'] . '/php/');
define('SITE_PATH', 'http://127.0.0.1/php/ecom/');
// define('SITE_PATH', 'http://127.0.0.1:5555/php/');
// define('SITE_PATH', 'http://127.0.0.1/php/');

define('PRODUCT_IMAGE_SERVER_PATH', SERVER_PATH . 'media/product/');
define('PRODUCT_IMAGE_SITE_PATH', SITE_PATH . 'media/product/');

// http://127.0.0.1:5555/
