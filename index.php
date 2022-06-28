<?php
session_start();
date_default_timezone_set(
    'Asia/Ho_Chi_Minh'
);
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

require_once './mvc/Bridge.php';
require_once './global.php';
// echo $_GET['url'];

$myapp = new App();
