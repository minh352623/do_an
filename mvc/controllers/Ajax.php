<?php

class Ajax extends Controller
{
    public $UserModel;
    function __construct()
    {
        $this->UserModel = $this->model('UserModel');
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
}
