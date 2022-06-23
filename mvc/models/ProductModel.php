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
    function product_same($iddm, $id)
    {
        $sql = "SELECT * FROM product  WHERE iddm = '$iddm' AND id<>'$id'";
        $rows = $this->pdo_query($sql);
        return $rows;
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
    function addProductCart($id)
    {
        $itemPro = $this->one_pro($id);
        $itemPro['soluong'] = 1;
        $itemPro['total'] = $itemPro['soluong'] * $itemPro['price'];

        $check = 0;
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key => $item) {
                if ($item['id'] == $id) {
                    $item['soluong']++;
                    $item['total'] = $item['soluong'] * $item['price'];
                    $itemNew = $item;
                    $keyNew  = $key;
                    $check = 1;
                }
            }
            if ($check == 1) {
                $_SESSION['cart'][$keyNew] = [];
                $_SESSION['cart'][$keyNew] = $itemNew;

                // array_splice($_SESSION['cart'], $keyNew, 1);
                // array_push($_SESSION['cart'], $itemNew);
            } else {

                array_push($_SESSION['cart'], $itemPro);
            }
        } else {
            array_push($_SESSION['cart'], $itemPro);
        }
        return json_encode($_SESSION['cart']);
    }
    function increAndDecre($soluong, $id)
    {
        if (isset($_SESSION['cart']) && $_SESSION['cart']) {
            $check = 0;

            foreach ($_SESSION['cart'] as $key => $item) {
                if ($item['id']  == $id) {
                    $item['soluong'] = $soluong;
                    $item['total'] = $item['soluong'] * $item['price'];

                    $itemNew = $item;
                    $keyNew  = $key;
                    $check = 1;
                }
            }
            if ($check == 1) {
                $_SESSION['cart'][$keyNew] = [];
                $_SESSION['cart'][$keyNew] = $itemNew;
                // array_splice($_SESSION['cart'], $keyNew, 1);
                // array_push($_SESSION['cart'], $itemNew);
            }
        }
        return json_encode($_SESSION['cart']);
    }
    function  removeItem($id)
    {
        if (isset($_SESSION['cart']) && $_SESSION['cart']) {
            $keyRemove = -1;
            foreach ($_SESSION['cart'] as $key => $item) {
                if ($item['id'] == $id) {
                    $keyRemove = $key;
                }
            }
            if ($keyRemove > -1) {
                array_splice($_SESSION['cart'], $keyRemove, 1);
            }
        }
        return json_encode($_SESSION['cart']);
    }

    function tongdh()
    {
        if (isset($_SESSION['cart'])) {
            $tongtien = 0;
            foreach ($_SESSION['cart'] as $item) {
                $tongtien += $item['total'];
            }
            return $tongtien;
        }
        return 0;
    }
}
