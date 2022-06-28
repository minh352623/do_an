<?php

class Contact extends Controller
{
    protected $contact;
    function __construct()
    {
        $this->contact = $this->model('ContactModel');
    }
    function Index()
    {
        $this->view("master2", ['page' => 'contact', 'path' => 'Liên hệ']);
    }
    function Submit()
    {
        $thongbao = "";
        $type = "";
        if (isset($_POST['contact_action']) && $_POST['contact_action']) {
            $email = $_POST['email'];
            $fullname = $_POST['fullname'];
            $topic = $_POST['topic'];
            $message = $_POST['message'];
            $create_at = date('Y-m-d H:i:s');
            if ($email != "" && $fullname != "" && $topic != "" && $message != "") {

                $this->contact->insert_contact($fullname, $email, $topic, $message, $create_at);
                $thongbao = "Cảm ơn bạn đã gửi liên hệ cho chúng tôi!";
                $type = "success";
            } else {
                $thongbao = "Vui lòng nhập đầy đủ thông tin!";
                $type = "danger";
            }
        }
        $this->view("master2", ['page' => 'contact', 'thongbao' => $thongbao, 'type' => $type]);
    }
}
