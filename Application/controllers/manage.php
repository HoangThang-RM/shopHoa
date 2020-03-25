<?php
class manage extends conectMV{
    function show(){
        $vi = $this->view("admin/pages/manager");
    }
    function logout(){
        unset($_SESSION['inforadmin']);
        header('Location: '.getUrl('admin/login'));
    }
}
?>
