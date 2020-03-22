<?php
class modelLogin extends DB
{
    function kiemtralogin($data)
    {
        $sql = "SELECT * FROM users WHERE username = '$data[username]' and password = '$data[password]'";
        $kqSql = mysqli_query($this->conn, $sql);
        $result = array();
        while ($row = mysqli_fetch_array($kqSql)) {
            $result = $row;
            json_encode($result);
            return $result;
        }

    }
}
?>