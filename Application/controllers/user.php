<?php
class user extends conectMV{
    function show(){
        //model
        //$md = $this->model("dulieu");
        //$data = $md->GetDL();
        //view
        
    }
    function login()
    {
        $vie = $this->view("layout-user",["pages"=>"login"]);
    }
    function register(){
        $vie = $this->view("layout-user",["pages"=>"register"]);
    }
}
?>