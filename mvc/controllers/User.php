<?php

class User extends Controller
{
    protected $user;

    function __construct()
    {
        $this->user = $this->model('UserModel');
    }
    function Index()
    {
        $idUser = $_SESSION['user']['id'];
        $info = $this->user->getUser_id($idUser);

        $this->view("master2", ['page' => 'infoUser', 'info' => $info]);
    }
    function Edit()
    {
        if (isset($_SESSION['user'])) {
            $idUser = $_SESSION['user']['id'];
            $info = $this->user->getUser_id($idUser);
            $this->view("master2", ['page' => 'editInfo', 'info' => $info]);
        }
    }
    function update_edit()
    {
        global $path_img;
        if (isset($_POST['update_info']) && $_POST['update_info'] != "") {
            $idUser = $_POST['id'];
            $email = $_POST['email'];
            $fullname = $_POST['fullname'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $image = $_FILES['avatar']['name'];
            $about = $_POST['about'];
            // echo $image;
            // echo $iddm;

            $target_dir = $path_img;
            $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
            if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
            }
            $this->user->update_info($idUser, $email, $fullname, $address, $phone, $image, $about);
            $info = $this->user->getUser_id($idUser);
            unset($_SESSION['user']);
            $_SESSION['user'] = $info;
            // print_r($_SESSION['user']);
            $this->view("master2", ['page' => 'infoUser', 'info' =>  $info]);
        }
    }
}
