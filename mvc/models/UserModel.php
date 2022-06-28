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
    function get_list_User($keyWork = "")
    {
        $sql = "SELECT * FROM users WHERE 1";
        if ($keyWork != "") {
            $sql .= " AND name like '%" . $keyWork . "%' OR email like '%" . $keyWork . "%' ";
        }
        $rows = $this->pdo_query($sql);
        return $rows;
    }
    function getUser($name)
    {
        $sql = "SELECT * FROM users where name = '$name'";
        $rows = $this->pdo_query($sql);
        return $rows;
    }
    function getUser_id($id)
    {
        $sql = "SELECT * FROM users where id = '$id'";
        $rows = $this->pdo_query_one($sql);
        return $rows;
    }
    function update_info($idUser, $email, $fullname, $address, $phone, $image, $about)
    {
        if ($image != "") {

            $sql = "UPDATE users SET name='$fullname',email='$email',image='$image',sdt='$phone',diachi='$address',about='$about' WHERE id = '$idUser'";
        } else {
            $sql = "UPDATE users SET name='$fullname',email='$email',sdt='$phone',diachi='$address',about='$about' WHERE id = '$idUser'";
        }

        $this->pdo_execute($sql);
    }
    function remove_user($id)
    {
        $sql = "DELETE FROM users WHERE id=$id";
        $this->pdo_execute($sql);
    }
    function update_info_user_admin($idUser, $email, $fullname, $address, $phone, $image, $about, $role)
    {
        if ($image != "") {

            $sql = "UPDATE users SET name='$fullname',role='$role',email='$email',image='$image',sdt='$phone',diachi='$address',about='$about' WHERE id = '$idUser'";
        } else {
            $sql = "UPDATE users SET name='$fullname',role='$role',email='$email',sdt='$phone',diachi='$address',about='$about' WHERE id = '$idUser'";
        }

        $this->pdo_execute($sql);
    }
}
