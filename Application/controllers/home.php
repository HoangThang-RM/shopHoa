<?php
    class home extends conectMV{
        function show(){
            //model

            //view
            $vi = $this->view("layout");
        }
        function left(){
            $a = $this->view("left");
        }
        function ads(){
            $a = $this->view("ads");
        }
        function layout(){
            $a = $this->view("layout");
        }
    }
?>