<?php

class Ajax extends Controller
{
    public $UserModel;
    public $Product;
    function __construct()
    {
        $this->UserModel = $this->model('UserModel');
        $this->Product = $this->model('ProductModel');
    }

    function checkUserName()
    {
        $un  = $_POST["un"];
        echo $this->UserModel->checkUserName($un);
    }
    function checkUserEmail()
    {
        $email  = $_POST["email"];
        echo $this->UserModel->checkUserEmail($email);
    }
    function checkRegister()
    {
        $name = $_POST['fullname'];
        $email = $_POST['user_email'];
        $pass = $_POST['pass_user'];
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $sdt = $_POST['sdt'];
        $diachi = $_POST['diachi'];

        echo $this->UserModel->checkRegister($name, $email, $pass, $sdt, $diachi);
    }
    function addProduct()
    {
        $id = json_decode($_POST['id_item']);
        print_r($this->Product->addProductCart($id));
    }
    function increAndDecre()
    {
        $id = $_POST['id_pro'];
        $soluong = $_POST['soluong'];
        print_r($this->Product->increAndDecre($soluong, $id));
    }
    function removeItem()
    {
        $id = $_POST['id_pro'];
        print($this->Product->removeItem($id));
    }
}
