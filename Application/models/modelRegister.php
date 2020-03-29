<?php
class modelRegister extends DB
{
    function checkUsername($user)
    {
        $sql = "SELECT id FROM users WHERE username='$user'";
        $kqSql = mysqli_query($this->conn, $sql);
        $result = false;
        if(mysqli_num_rows($kqSql) > 0){
            $result = true;
        }
        $result = json_encode($result);
        return $result;
    }

    function checkEmail($email)
    {
        $sql = "SELECT id FROM users WHERE LOWER(email) LIKE LOWER('$email')";
        $kqSql = mysqli_query($this->conn, $sql);
        $result = false;
        if(mysqli_num_rows($kqSql) > 0){
            $result = true;
        }
        $result = json_encode($result);
        return $result;
    }

    function insertUser($data)
    {
        $sql = "INSERT INTO users VALUES ('5', '$data[username]', '$data[password]', NULL, '$data[email]', '$data[sdt]', NULL)";
        $result = false;
        if(mysqli_query($this->conn, $sql)){
            $result = true;
        }
        $result = json_encode($result);
        return $result;
    }
}
?>