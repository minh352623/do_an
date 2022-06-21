<?php

class ProductModel extends DB
{


    function insert_pro($name, $price, $image, $iddm, $description)
    {
        $sql = "INSERT INTO product (name,price,image,iddm,description) values ('$name','$price','$image','$iddm','$description') ";

        $this->pdo_execute($sql);
    }
    function list_sp($iddm = 0, $keywwork = "")
    {
        $sql = "SELECT * FROM product where 1";
        if ($iddm > 0) {
            $sql .= " AND iddm = '" . $iddm . "'";
        }
        if ($keywwork != "") {
            $sql .= " AND name like '%" . $keywwork . "%'";
        }
        $rows = $this->pdo_query($sql);
        return $rows;
    }
    function list_new_sp($number)
    {
        $sql = "SELECT * FROM product where 1 limit 0,$number";

        $rows = $this->pdo_query($sql);
        return $rows;
    }
    function one_pro($id)
    {
        $sql = "SELECT * FROM product  WHERE id = '$id'";
        $row = $this->pdo_query_one($sql);
        return $row;
    }
    function update_pro($idpro, $name, $price, $image, $iddm, $description)
    {
        if ($image != "") {

            $sql = "UPDATE product SET name='$name',price='$price',image='$image',iddm='$iddm',description='$description' WHERE id = '$idpro'";
        } else {
            $sql = "UPDATE product SET name='$name',price='$price',iddm='$iddm',description='$description' WHERE id = '$idpro'";
        }

        $this->pdo_execute($sql);
    }
    function delete_pro($id)
    {
        $sql = "DELETE FROM product WHERE id=$id";
        $this->pdo_execute($sql);
    }
}
