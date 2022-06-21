<?php

class UserModel extends DB
{


    function checkUserName($un)
    {
        $sql = "SELECT id FROM users where name = '$un'";
        $rows = $this->pdo_query($sql);
        $kq = false;
        if (is_array($rows) && !empty($rows)) {
            $kq = true;
        }
        return json_encode($kq);
    }
    function checkUserEmail($email)
    {
        $sql = "SELECT id FROM users where email = '$email'";
        $rows = $this->pdo_query($sql);
        $kq = false;
        if (is_array($rows) && !empty($rows)) {
            $kq = true;
        }
        return json_encode($kq);
    }
    function checkRegister($name, $email, $pass, $sdt, $diachi)
    {
        $sql = "INSERT INTO users (name,email,password,sdt,diachi) value ('$name', '$email', '$pass','$sdt','$diachi')";
        $message = false;
        if ($this->pdo_execute($sql)) {
            $message = true;
        }
        return json_encode($message);
    }

    function getUser($name)
    {
        $sql = "SELECT * FROM users where name = '$name'";
        $rows = $this->pdo_query($sql);
        return $rows;
    }
}
