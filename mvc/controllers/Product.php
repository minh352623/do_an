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
    function filter_cate($idCate)
    {
        $cate = $this->category->list_dm();
        $products = $this->product->list_sp($idCate, "");
        $this->view("master2", ['page' => 'product', "product" => $products, 'cate' => $cate]);
    }
    function filterKey()
    {
        if (isset($_POST['filter_product']) && $_POST['filter_product']) {
            $keywork = $_POST['keywork'];
            $cate = $this->category->list_dm();
            $products = $this->product->list_sp(0, $keywork);
            $this->view("master2", ['page' => 'product', "product" => $products, 'cate' => $cate]);
        }
    }
    function filterKey_header()
    {
        if (isset($_POST['filter_product_header']) && $_POST['filter_product_header']) {
            $keywork = $_POST['keywork_h'];
            $cate = $this->category->list_dm();
            $products = $this->product->list_sp(0, $keywork);
            $this->view("master2", ['page' => 'product', "product" => $products, 'cate' => $cate]);
        }
    }
}
