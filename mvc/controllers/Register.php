<?php

class Register extends Controller
{
    public $register;

    function __construct()
    {

        $this->register = $this->model('UserModel');
    }

    function dk()
    {
        //get data

        if (isset($_POST['dangki'])) {
            $userName = $_POST['fullname'];
            $password = $_POST['password'];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $email = $_POST['email'];
            $message = $this->register->insertUser($userName, $email, $password);

            echo $message;
            $this->view('master1', ['page' => "register", 'result' => $message]);
        }
    }
    function Index()
    {
        $this->view('master1', ['page' => "register"]);
    }
}
