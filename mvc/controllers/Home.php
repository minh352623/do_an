<?php

class Home extends Controller
{
    protected $product;
    function __construct()
    {
        $this->product = $this->model('ProductModel');
    }
    function Index()
    {
        $products = $this->product->list_new_sp(10);
        $this->view("master2", ['page' => 'home', "product" => $products]);
    }
}
