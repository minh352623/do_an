<?php

class Product extends Controller
{
    protected $product;
    protected $category;

    function __construct()
    {
        $this->category = $this->model('DanhMucModel');
        $this->product = $this->model('ProductModel');
    }
    function Index()
    {
        $cate = $this->category->list_dm();
        $products = $this->product->list_sp(0, "");
        $this->view("master2", ['page' => 'product', "product" => $products, 'cate' => $cate]);
    }
    function Detail($id)
    {
        $product = $this->product->one_pro($id);
        $listProductSame = $this->product->product_same($product['iddm'], $product['id']);
        $this->view("master2", ['page' => 'productDetail', "product" => $product, 'productSames' => $listProductSame]);
    }
}
