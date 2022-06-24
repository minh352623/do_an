<?php

class MyBill extends Controller
{
    public $bill;

    function __construct()
    {

        $this->bill = $this->model('BillModel');
    }
    function Index()
    {

        $bills = $this->bill->load_bill_user($_SESSION['user']['id']);
        $this->view('master2', ['page' => "myBill", 'bills' => $bills]);
    }
    function DetailBill($idBill)
    {
        $bill = $this->bill->load_one_bill($idBill);
        $detailBill = $this->bill->load_detail_bill($idBill);
        $this->view("master2", ['page' => 'detailBill', 'bill' => $bill, 'detailBill' => $detailBill]);
    }
}
