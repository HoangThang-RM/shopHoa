<?php
    class Ajax extends conectMV{
        function show()
        {
        }
        function __construct()
        {

        }
        function checkLogin(){
            if(!empty($_POST))
            {
                $usernameinput = $_POST["username"];
                $passwordinput = $_POST["password"];
                $accountinput = $_POST['account'];
                $model = $this->model("modelLogin");
                $data = $model->kiemtralogin(['username'=>$usernameinput
                                            ,'password'=>$passwordinput 
                                            ,'account'=>$accountinput
                                            ]);
                if(!empty($data))
                {
                    // Nếu thông tin đăng nhập chính xác, trả về giá trị là 1
                    if ($usernameinput == $data["username"] && $passwordinput == $data["password"]) {
                        echo 1;
                            $_SESSION['infor'.$accountinput] = $data;
                        exit();
                     }
                }                                      
                // Nếu thông tin đăng nhập sai, trả về giá trị là 0
                echo 0;
                exit();
            }
            echo 0;
            exit();
        }
        //kiểm tra trùng username
        function checkRegisterUser(){
            if(!empty($_POST))
            {
                $username = $_POST["username"];
                $model = $this->model("modelRegister");
                if($model->checkUsername($username) == "true")
                {
                    echo "Tên tài khoản đã có người sử dụng";
                }else{
                    echo "true";
                }
                exit();
            }
            echo "true";
            exit();
        }
        //kiểm tra trùng email
        function checkRegisterEmail(){
            if(!empty($_POST))
            {
                $email = $_POST["email"];
                $model = $this->model("modelRegister");
                if($model->checkEmail($email) == "true")
                {
                    echo "Email đã có người sử dụng";
                    exit();
                }
            }
            exit();
        }
        //check insert user vô db
        function checkRegister(){
            if(!empty($_POST))
            {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $password = password_hash($password,PASSWORD_DEFAULT);
                $email = $_POST["email"];
                $sdt = $_POST["sdt"];
                $model = $this->model("modelRegister");
                echo $model->insertUser(['username'=>$username,
                                         'password'=>$password,
                                         'email'=>$email,
                                         'sdt'=>$sdt
                                        ]);
                exit();
            }
            echo "false";
            exit();
        }

    } 
?>