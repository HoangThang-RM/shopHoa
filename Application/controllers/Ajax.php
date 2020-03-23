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
                        $_SESSION['inforUser'] = $data;
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

    }
    
?>