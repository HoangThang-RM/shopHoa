<?php
class admin extends conectMV{
    function show()
    {
        if(!empty($_SESSION['inforadmin']))
        {
            header('Location: '.getUrl('manage'));
        }
        $vie = $this->view("admin/layout-login",["pages"=>"loginAdmin"]);
    }
    function login()
    {
        if(!empty($_SESSION['inforadmin']))
        {
            header('Location: '.getUrl('manage'));
        }
        $vie = $this->view("admin/layout-login",["pages"=>"loginAdmin"]);
    }
}
?>