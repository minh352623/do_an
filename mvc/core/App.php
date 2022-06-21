<?php

class App
{
    protected $controller = "Register";
    protected $action = "Index";
    protected $params = [];
    function __construct()
    {

        $arr = $this->urlProcess();
        //xử lý controller
        if (isset($arr[0])) {

            if (file_exists("./mvc/controllers/" . $arr[0] . ".php")) {
                $this->controller = $arr[0];
                unset($arr[0]);
            }
        }

        require_once "./mvc/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        //xử lý action 
        //trường hợp 1 nếu không có actoin sẽ chạy action mặc định
        //trường hợp 2 có action thì chạy action đó
        if (isset($arr[1])) {
            //kiểm tra trong lớp có function đó hay không
            //tham số 1 là cái controller dang muốn chạy
            //tham số 2 là cái function trogn cái lớp conntroller 
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        //xử lý params
        $this->params = $arr ? array_values($arr) : [];
        // echo $this->controller;
        // echo $this->action;
        // echo '<pre>';
        // print_r($this->params);

        //gọi class và action trong class để thực thi yêu cầu người dùng
        call_user_func_array([$this->controller, $this->action], $this->params);
    }


    //xử lý url
    function urlProcess()
    {
        if (isset($_GET["url"])) {
            //lọc url 

            //loại bỏ khoảng trống và kí tự lạ và lọc 
            // filter_var(trim($_GET["url"]), "/");

            // cắt chuổi theo dấu / trả về mảng
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
