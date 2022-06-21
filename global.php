<?php
define('_WEB_HOST_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/live'); //địa chỉ trang chủ

define('_WEB_HOST_TEMPLATE', _WEB_HOST_ROOT . '/public');

define('path_img', _WEB_HOST_ROOT . '/uploads');

$path_img = 'uploads/';
function product_price($priceFloat)
{
    $symbol = 'đ';
    $symbol_thousand = '.';
    $decimal_place = 0;
    $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
    return $price . $symbol;
}
