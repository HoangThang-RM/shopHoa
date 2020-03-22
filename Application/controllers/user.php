<?php
class user extends conectMV{
    function show(){
        $vie = $this->view("layout-user",["pages"=>"login"]);
    }
    function login()
    {
        if(!empty($_SESSION['inforUser']))
        {
            header('Location: http://localhost:8888/live/user/infor');
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
        unset($_SESSION['inforUser']);
        header('Location: http://localhost:8888/live/user/login');
    }
}
?>