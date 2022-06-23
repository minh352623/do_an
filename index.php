<?php
session_start();
date_default_timezone_set(
    'Asia/Ho_Chi_Minh'
);
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
// echo '<pre>';
// print_r($_SESSION['cart']);
// print_r($_SESSION['user']);

require_once './mvc/Bridge.php';
require_once './global.php';
// echo $_GET['url'];

$myapp = new App();
