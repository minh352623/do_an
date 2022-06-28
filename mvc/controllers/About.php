<?php

class About extends Controller
{
    function Index()
    {
        $this->view("master2", ['page' => 'about', "path" => "Giới thiệu chung"]);
    }
}
