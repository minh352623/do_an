<?php

class Login extends Controller
{
    public $register;
    public $login;
    function __construct()
    {

        $this->register = $this->model('UserModel');
    }


    function Index()
    {
        $this->view('master1', ['page' => "login"]);
    }
    function checkLogin()
    {
        $name = $_POST['fullname'];
        $pass = $_POST['password'];
        $rows = $this->register->getUser($name);

        // print_r($rows);
        if (!empty($rows)) {
            foreach ($rows as $row) {

                $passwordHash = $row['password'];
                if (password_verify($pass, $passwordHash)) {
                    $_SESSION['user'] = $row;

                    header('Location: ' . _WEB_HOST_ROOT . '/Home');
                } else {

                    header('Location: ' . _WEB_HOST_ROOT . '/Login');
                }
            }
        } else {

            header('Location: ' . _WEB_HOST_ROOT . '/Login');
        }
    }
    function Out()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            $this->view('master2');
            // header("Location: Login");
        }
    }
}
