<?php

class DanhMucModel extends DB
{


    function insert_dm($name)
    {
        $sql = "INSERT INTO category (name) values ('$name') ";

        $this->pdo_execute($sql);
    }
    function list_dm()
    {
        $sql = "SELECT * FROM category";
        $rows = $this->pdo_query($sql);
        return $rows;
    }
    function one_dm($id)
    {
        $sql = "SELECT * FROM category  WHERE id = '$id'";
        $row = $this->pdo_query_one($sql);
        return $row;
    }
    function update_dm($name, $id)
    {
        $sql = "UPDATE category SET name='$name' WHERE id = '$id'";
        $this->pdo_execute($sql);
    }
    function delete_dm($id)
    {
        $sql = "DELETE FROM category WHERE id=$id";
        $this->pdo_execute($sql);
    }
}
