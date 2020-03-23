<?php
class manage extends conectMV{
    function show(){
        $vi = $this->view("admin/pages/manager");
    }
    function logout(){
        unset($_SESSION['inforUser']);
        header('Location: http://localhost:8888/live/admin/login');
    }
}
?>
