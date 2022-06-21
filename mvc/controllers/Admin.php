<?php

class Admin extends Controller
{
    protected $danhmuc;
    protected $product;
    function __construct()
    {
        $this->danhmuc = $this->model("DanhMucModel");
        $this->product = $this->model("ProductModel");
    }
    function Index()
    {   //model

        //view 

        $this->view("admin", ['page' => 'homeAdmin']);
    }
    //begin danh muc
    function danhmuc()
    {
        $rows  = $this->danhmuc->list_dm();
        $this->view("admin", ['page' => 'danhmuc', 'listdm' => $rows]);
    }
    function addDm()
    {
        $this->view("admin", ['page' => 'addDm']);
    }
    function insertDm()
    {
        $thongbao = "";
        if (isset($_POST['themmoi']) && $_POST['themmoi']) {

            if (isset($_POST['tenloai']) && $_POST['tenloai'] != "") {

                $name = $_POST['tenloai'];
                $this->danhmuc->insert_dm($name);
                $thongbao = "Thêm danh mục thành công!";
            }
        }

        $this->view("admin", ['page' => 'addDm', 'thongbao' => $thongbao]);
    }
    function editdm($id)
    {
        $row =  $this->danhmuc->one_dm($id);
        // print_r($row);
        $this->view("admin", ['page' => 'editDm', "one_dm" => $row]);
    }
    function updateDm()
    {
        $thongbao = "";
        if (isset($_POST['update']) && $_POST['update'] != "") {

            $id = $_POST['id'];
            $name = $_POST['tenloai'];
            $this->danhmuc->update_dm($name, $id);
            $thongbao = "Cập nhật thành công";
        }
        $this->view("admin", ['page' => 'editDm', 'thongbao' => $thongbao]);
    }
    function deletedm($id)
    {
        $this->danhmuc->delete_dm($id);
        $this->danhmuc();
    }
    //end danh mục


    //begin sản phẩm 

    function sanpham()
    {
        if (isset($_POST['filter_sp']) && $_POST['filter_sp']) {
            $iddm = $_POST['iddm'];
            $keywwork = $_POST['keyword'];
        } else {
            $iddm = 0;
            $keywwork = "";
        }
        echo $iddm;
        echo $keywwork;
        $listDanhMuc  = $this->danhmuc->list_dm();
        $listSanPham  = $this->product->list_sp($iddm, $keywwork);

        $this->view("admin", ['page' => 'sanpham', 'cates' => $listDanhMuc, 'products' => $listSanPham]);
    }
    function viewAddPro()
    {
        $listDanhMuc  = $this->danhmuc->list_dm();
        $this->view("admin", ['page' => 'addProduct', "danhmuc" => $listDanhMuc]);
    }
    function addProduct()
    {
        global $path_img;
        $thongbao = "";
        if (isset($_POST['themmoisp']) && $_POST['themmoisp'] != "") {

            $iddm = $_POST['iddm'];

            $name = $_POST['tensp'];
            $price = $_POST['giasp'];
            $description = $_POST['motasp'];
            $image = $_FILES['hinhsp']['name'];
            $target_dir = $path_img;
            $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);
            if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)) {
                // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
            }
            $this->product->insert_pro($name, $price, $image, $iddm, $description);
            $thongbao = "Thêm thành công!";
        }
        $listDanhMuc  = $this->danhmuc->list_dm();

        $this->view("admin", ['page' => 'addProduct', "danhmuc" => $listDanhMuc, 'thongbao' => $thongbao]);
    }

    function deleteProduct($id)
    {
        $this->product->delete_pro($id);
        $listDanhMuc  = $this->danhmuc->list_dm();
        $listSanPham  = $this->product->list_sp();

        $this->view("admin", ['page' => 'sanpham', 'cates' => $listDanhMuc, 'products' => $listSanPham]);
    }
    function editProduct($id)
    {
        $product = $this->product->one_pro($id);
        $listDanhMuc  = $this->danhmuc->list_dm();

        $this->view('admin', ['page' => 'editProduct', 'product' => $product, "danhmuc" => $listDanhMuc]);
    }
    function updateProduct()
    {
        global $path_img;
        $thongbao = "";
        if (isset($_POST['updatesp']) && $_POST['updatesp'] != "") {

            $iddm = $_POST['iddm'];
            $idpro = $_POST['id'];
            $name = $_POST['tensp'];
            $price = $_POST['giasp'];
            $description = $_POST['motasp'];
            $image = $_FILES['hinhsp']['name'];
            echo $image;
            echo $iddm;

            $target_dir = $path_img;
            $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);
            if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)) {
                // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
            }
            $this->product->update_pro($idpro, $name, $price, $image, $iddm, $description);
            // $thongbao = "Cập nhật thành công!";
        }
        $this->sanpham();
    }
}
