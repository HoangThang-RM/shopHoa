$(document).ready(function() {
    //pop-up forgetPass
    $('#forgetPass').click(function(event) {
        $('.formForgetPass').removeClass('an-hien-thi');
        $('.nen-mo').removeClass('an-hien-thi');
    });

    $('#exit-formForgetPass').click(function(event) {
        $('.formForgetPass').addClass('an-hien-thi');
        $('.nen-mo').addClass('an-hien-thi');
    });

    $('.nen-mo').click(function(event) {
        $('.formForgetPass').addClass('an-hien-thi');
        $('.nen-mo').addClass('an-hien-thi');
    });

    //xử lý đăng nhập
    $("#login-user").submit(function() {
        let username = $("#user-login").val();
        let password = $("#password-login").val();
        let account = 'admin';
        let error = $(".error-login");
        error.html("");
        //check xem tài khoản và mật khẩu trống không
        if (username == "") {
            error.html("Tên đăng nhập không được để trống");
            return false;
        }
        if (password == "") {
            error.html("Mật khẩu không được để trống");
            return false;
        }
        let result = false;
        //gọi Ajax
        $.ajax({
            async: false,
            url: "http://localhost:8888/live/Ajax/checkLogin",
            method: "POST",
            data: { username: username, password: password, account: account },
            success: function(response) {
                if (response === "1") {
                    result = true;
                } else {
                    error.html("Tên đăng nhập hoặc mật khẩu không chính xác !");
                }
            }
        });
        return result;
    });
});