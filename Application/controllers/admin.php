<?php
class admin extends conectMV{
    function show()
    {
        if(!empty($_SESSION['inforUser']))
        {
            header('Location: http://localhost:8888/live/manage');
        }
        $vie = $this->view("admin/layout-login",["pages"=>"loginAdmin"]);
    }
    function login()
    {
        if(!empty($_SESSION['inforUser']))
        {
            header('Location: http://localhost:8888/live/manage');
        }
        $vie = $this->view("admin/layout-login",["pages"=>"loginAdmin"]);
    }
}
?>