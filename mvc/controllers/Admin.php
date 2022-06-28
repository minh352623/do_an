<?php

class Admin extends Controller
{
    protected $danhmuc;
    protected $product;
    protected $user;
    protected $bill;
    function __construct()
    {
        $this->danhmuc = $this->model("DanhMucModel");
        $this->product = $this->model("ProductModel");
        $this->user = $this->model("UserModel");
        $this->bill = $this->model("BillModel");
    }
    function Index()
    {   //model
        $listThongKe = $this->product->load_all_thongke();
        //view 

        $this->view("admin", ['module' => 'home', 'page' => 'homeAdmin', "thongke" => $listThongKe]);
    }
    //begin danh muc
    function danhmuc()
    {
        $rows  = $this->danhmuc->list_dm();
        $this->view("admin", ['module' => 'category', 'page' => 'danhmuc', 'listdm' => $rows]);
    }
    function addDm()
    {
        $this->view("admin", ['module' => 'category', 'page' => 'addDm']);
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

        $this->view("admin", ['module' => 'category', 'page' => 'addDm', 'thongbao' => $thongbao]);
    }
    function editdm($id)
    {
        $row =  $this->danhmuc->one_dm($id);
        // print_r($row);
        $this->view("admin", ['module' => 'category', 'page' => 'editDm', "one_dm" => $row]);
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
        $this->view("admin", ['module' => 'category', 'page' => 'editDm', 'thongbao' => $thongbao]);
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

        $this->view("admin", ['module' => 'products', 'page' => 'sanpham', 'cates' => $listDanhMuc, 'products' => $listSanPham]);
    }
    function viewAddPro()
    {
        $listDanhMuc  = $this->danhmuc->list_dm();
        $this->view("admin", ['module' => 'products', 'page' => 'addProduct', "danhmuc" => $listDanhMuc]);
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

        $this->view("admin", ['module' => 'products', 'page' => 'addProduct', "danhmuc" => $listDanhMuc, 'thongbao' => $thongbao]);
    }

    function deleteProduct($id)
    {
        $this->product->delete_pro($id);
        $listDanhMuc  = $this->danhmuc->list_dm();
        $listSanPham  = $this->product->list_sp();

        $this->view("admin", ['module' => 'products', 'page' => 'sanpham', 'cates' => $listDanhMuc, 'products' => $listSanPham]);
    }
    function editProduct($id)
    {
        $product = $this->product->one_pro($id);
        $listDanhMuc  = $this->danhmuc->list_dm();

        $this->view('admin', ['module' => 'products', 'page' => 'editProduct', 'product' => $product, "danhmuc" => $listDanhMuc]);
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
            // echo $image;
            // echo $iddm;

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

    //quản lí tài khoản

    function list_acccount()
    {
        $keywork = "";
        if (isset($_POST['filter_account']) && $_POST['filter_account']) {
            $keywork = $_POST['keyword'];
        }
        $listAccount = $this->user->get_list_User($keywork);
        $this->view('admin', ['module' => 'taikhoan', 'page' => 'accounts', 'accounts' => $listAccount]);
    }
    function remove_account($id)
    {
        $this->user->remove_user($id);
        $listAccount = $this->user->get_list_User("");
        $this->view('admin', ['module' => 'taikhoan', 'page' => 'accounts', 'accounts' => $listAccount]);
    }
    function edit_account($id)
    {

        $info = $this->user->getUser_id($id);
        $this->view('admin', ['module' => 'taikhoan', 'page' => 'editUser', 'info' => $info]);
    }
    function update_edit_user()
    {
        global $path_img;
        $thongbao = "";
        if (isset($_POST['update_info']) && $_POST['update_info'] != "") {
            $idUser = $_POST['id'];
            $role = $_POST['role'];

            $email = $_POST['email'];
            $fullname = $_POST['fullname'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $image = $_FILES['avatar']['name'];
            $about = $_POST['about'];


            // echo $iddm;

            $target_dir = $path_img;
            $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
            if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
            }
            $this->user->update_info_user_admin($idUser, $email, $fullname, $address, $phone, $image, $about, $role);
            // print_r($_SESSION['user']);
            $info = $this->user->getUser_id($idUser);
            $thongbao = "Cập nhật thành công";
            $this->view('admin', ['module' => 'taikhoan', 'page' => 'editUser', 'info' => $info, 'thongbao' => $thongbao]);
        }
    }

    //quản lí đơn hàng
    function list_bill()
    {
        $keyword = "";
        if (isset($_POST['filter_bill']) && $_POST['filter_bill'] != "") {
            $keyword = $_POST['keyword'];
        }
        $listBill = $this->bill->load_bill_list($keyword);
        $this->view('admin', ['module' => 'bill', 'page' => 'listbill', 'listBill' => $listBill]);
    }
    function detail_bill($idBill)
    {
        $thongbao = "";
        if (isset($_POST['update_bill']) && $_POST['update_bill']) {
            $id = $_POST['id'];
            $status = $_POST['bill_status'];
            $this->bill->update($id, $status);
            $thongbao = "Cập nhật thành công";
        }
        $bill = $this->bill->load_one_bill($idBill);
        $detailBill = $this->bill->load_detail_bill($idBill);
        $this->view("admin", ['module' => 'bill', 'page' => 'detailBill', 'bill' => $bill, 'detailBill' => $detailBill, 'thongbao' => $thongbao]);
    }
    function filter_bill($status)
    {
        $bills = $this->bill->load_bill_user(0, $status);
        $this->view('admin', ['module' => 'bill', 'page' => 'listbill', 'listBill' => $bills]);
    }
}
