<?php

class ContactModel extends DB
{


    function insert_contact($fullname, $email, $topic, $message, $create_at)
    {
        $sql = "INSERT INTO contact (fullname,email,chude,message,create_at) values ('$fullname','$email','$topic','$message','$create_at') ";

        $this->pdo_execute($sql);
    }
}
