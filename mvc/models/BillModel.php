<?php

class BillModel extends DB
{
    function insert_bill($name, $tel, $address, $email, $pttt, $ptgh, $tongdon, $date, $id_user)
    {
        $sql = "INSERT INTO bill (name_user,tel,address,email,pttt,ptgh,tongdon,ngaydat,id_user) values ('$name','$tel','$address','$email','$pttt','$ptgh','$tongdon','$date','$id_user') ";

        return  $this->pdo_execute_lastInsertID($sql);
    }
    function insert_detail_bill($idUser, $idPro, $image, $namePro, $price, $soluong, $tongtien, $idbill)
    {
        $sql = "INSERT INTO detailbill (id_user,id_pro,image,name_pro,price,soluong,tongtien,idbill) values ('$idUser','$idPro','$image','$namePro','$price','$soluong','$tongtien','$idbill') ";

        $this->pdo_execute($sql);
    }
    function load_one_bill($idBill)
    {
        $sql = "SELECT * FROM bill  WHERE id = '$idBill'";
        $row = $this->pdo_query_one($sql);
        return $row;
    }
    function load_bill_user($idUser = 0, $status = -1)
    {
        $sql = "SELECT * FROM bill WHERE 1";
        if ($idUser > 0) {
            $sql .= " AND id_user = '$idUser'";
        }
        if ($status > -1 && $status != "") {
            $sql .= " AND bill_status = '$status'";
        }
        $sql .= " ORDER BY id DESC";
        $row = $this->pdo_query($sql);
        return $row;
    }
    function load_bill_list($keyword)
    {
        $sql = "SELECT * FROM bill WHERE 1";
        if ($keyword != "") {
            $sql .= " AND name_user like '%" . $keyword . "%' OR address like '%" . $keyword . "%'  OR email like '%" . $keyword . "%'";
        }
        $sql .= " ORDER BY id desc";
        $rows = $this->pdo_query($sql);
        return $rows;
    }
    function load_detail_bill($idBill)
    {
        $sql = "SELECT * FROM detailbill  WHERE idbill=" . $idBill;
        $rows = $this->pdo_query($sql);
        return $rows;
    }
    function update($idbill, $status)
    {
        $sql = "UPDATE bill SET bill_status='$status' WHERE id = '$idbill'";
        $this->pdo_execute($sql);
    }
}
