<?php

class Payment extends Controller
{
    protected $product;
    protected $bill;
    function __construct()
    {
        $this->product = $this->model('ProductModel');
        $this->bill = $this->model('BillModel');
    }
    function Index()
    {

        $this->view("master2", ['page' => 'payment', 'carts' => $_SESSION['cart']]);
    }
    function bill()
    {
        if (isset($_POST['bill']) && $_POST['bill'] != "") {
            if (!empty($_SESSION['cart'])) {

                $name_user = $_POST['name'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $pttt = $_POST['payment'];
                $ptgh = $_POST['modal'];
                $date = date("Y-m-d H:i:s");
                $sumCart = $this->product->tongdh();
                $idBill =  $this->bill->insert_bill($name_user, $tel, $address, $email, $pttt, $ptgh, $sumCart, $date, $_SESSION['user']['id']);

                //insert chitiet don hang $ idbill
                foreach ($_SESSION['cart'] as $item) {
                    $this->bill->insert_detail_bill($_SESSION['user']['id'], $item['id'], $item['image'], $item['name'], $item['price'], $item['soluong'], $item['total'], $idBill);
                }
                $bill = $this->bill->load_one_bill($idBill);
                $detailBill = $this->bill->load_detail_bill($idBill);
                $_SESSION['cart'] = [];
                $this->view("master2", ['page' => 'detailBill', 'bill' => $bill, 'detailBill' => $detailBill]);
            }
        }
    }
}
