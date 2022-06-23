<?php

class Cart extends Controller
{
    protected $product;

    function __construct()
    {
        $this->product = $this->model('ProductModel');
    }
    function Index()
    {

        $this->view("master2", ['page' => 'cart', 'carts' => $_SESSION['cart']]);
    }
}
