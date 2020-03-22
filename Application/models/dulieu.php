<?php
class DuLieu extends DB
{
    function GetDL()
    {
        $sql = "SELECT * FROM users";
        $kqSql = mysqli_query($this->conn, $sql);
        $result = array();
        while ($row = mysqli_fetch_array($kqSql)) {
            $result = $row;
            json_encode($result);
            return $result;
            //print_r($result); 
        }

    }
}
