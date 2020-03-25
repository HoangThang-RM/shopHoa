<?php
class user extends conectMV{
    function show(){
        if(!empty($_SESSION['inforusers']))
        {
            header('Location: '.getUrl('user/infor'));
        }
        $vie = $this->view("layout-user",["pages"=>"login"]);
    }
    function login()
    {
        if(!empty($_SESSION['inforusers']))
        {
            header('Location: '.getUrl('user/infor'));
        }
        $vie = $this->view("layout-user",["pages"=>"login"]);
    }
    function register(){
        $vie = $this->view("layout-user",["pages"=>"register"]);
    }
    function infor(){
        $vie = $this->view("layout-user",["pages"=>"inforUser"]);
    }

    function logout(){
        unset($_SESSION['inforusers']);
        header('Location: '.getUrl('user/login'));
    }
}
?>