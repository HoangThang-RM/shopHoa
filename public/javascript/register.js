$(document).ready(function() {
    let errorUser = true;
    let errorEmail = true;
    let errorPass = true;
    let errorRePass = true;
    let errorPhone = true;
    //check username
    $("#user-register").blur(function() {
        let username = $("#user-register").val();
        let pattern = /^([a-zA-Z0-9]){5,16}$/;
        if (pattern.test(username)) {
            $("#error-user").html("");
            //check trùng username
            $.ajax({
                async: false,
                url: "http://localhost:8888/live/Ajax/checkRegisterUser",
                method: "POST",
                data: { username: username },
                success: function(response) {
                    if (response == "true") {
                        errorUser = false;
                    } else {
                        errorUser = true;
                        $("#error-user").html(response);
                    }
                }
            });
        } else {
            $("#error-user").html("Tên tài khoản chỉ được chứa các kí tự a-z A-z 0-9 và độ dài 5-16 kí tự");
            errorUser = true;
        }
    });

    //check email
    $("#email-register").blur(function() {
        let email = $("#email-register").val();
        let pattern = /^[a-zA-Z][a-zA-Z0-9_\.]{3,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/;
        if (pattern.test(email)) {
            $("#error-email").html("");
            //check trùng email
            $.ajax({
                async: false,
                url: "http://localhost:8888/live/Ajax/checkRegisterEmail",
                method: "POST",
                data: { email: email },
                success: function(response) {
                    if (response == "true") {
                        errorUser = false;
                    } else {
                        errorUser = true;
                        $("#error-email").html(response);
                    }
                }
            });
        } else {
            $("#error-email").html("Không phải địa chỉ email");
            errorEmail = true;
        }
    });

    //check pass
    $("#password-register").blur(function() {
        let pass = $("#password-register").val();
        let pattern = /^.{8,50}$/;
        let pattern2 = /^[a-zA-Z0-9\!\@\#\$\%\^\&\*\.]*$/
        if (pattern.test(pass)) {
            $("#error-pass").html("");
            errorPass = false;
            if (!pattern2.test(pass)) {
                $("#error-pass").html("Chỉ được chứa các kí tự a-z A-Z 0-9 ! @ # $ % ^ & * .");
                errorPass = true;
            }
        } else {
            $("#error-pass").html("Độ dài từ 8-50 kí tự");
            errorPass = true;
        }
    });

    //check repass
    $("#repassword-register").blur(function() {
        let pass = $("#password-register").val();
        let repass = $("#repassword-register").val();
        if (repass === pass) {
            $("#error-repass").html("");
            errorRePass = false;
        } else {
            $("#error-repass").html("Nhập lại mật khẩu không khớp");
            errorRePass = true;
        }
    });

    //check sdt
    $("#phone-register").blur(function() {
        let sdt = $("#phone-register").val();
        let pattern = /^[0]([0-9]){9,16}$/;
        if (pattern.test(sdt)) {
            $("#error-phone").html("");
            errorPhone = false;
        } else {
            $("#error-phone").html("Vui lòng nhập số điện thoại chính xác");
            errorPhone = true;
        }
    });
    $("#register-user").submit(function() {

        let error = false;
        let username = $("#user-register").val();
        let email = $("#email-register").val();
        let pass = $("#password-register").val();
        let repass = $("#repassword-register").val();
        let sdt = $("#phone-register").val();

        if (username == "") {
            $("#error-user").html("Không được để trống");
            error = true;
        }
        if (email == "") {
            $("#error-email").html("Không được để trống");
            error = true;
        }
        if (pass == "") {
            $("#error-pass").html("Không được để trống");
            error = true;
        }
        if (repass == "") {
            $("#error-repass").html("Không được để trống");
            error = true;
        }
        if (sdt == "") {
            $("#error-phone").html("Không được để trống");
            error = true;
        }
        //if (errorUser || errorEmail || errorPass || errorRePass || errorPhone || error) {
        //    return false;
        // }
        //đăng kí
        $.ajax({
            async: false,
            url: "http://localhost:8888/live/Ajax/checkRegister",
            method: "POST",
            data: { username: username, email: email, password: pass, sdt: sdt },
            success: function(response) {
                if (response == "true") {
                    $('.alertRegister').removeClass('an-hien-thi');
                    $('.nen-mo').removeClass('an-hien-thi');
                } else {
                    $("#error-dangki").html("Đăng kí thất bại");
                }
            }
        });
        return false;
    });
    //điều hướng sau đăng kí
    $('#exit-alert').click(function(event) {
        $('.alertRegister').addClass('an-hien-thi');
        $('.nen-mo').addClass('an-hien-thi');
        window.location.assign("http://localhost:8888/live/user/login");
    });

    $('.nen-mo').click(function(event) {
        $('.alertRegister').addClass('an-hien-thi');
        $('.nen-mo').addClass('an-hien-thi');
        window.location.assign("http://localhost:8888/live/user/login");
    });
});