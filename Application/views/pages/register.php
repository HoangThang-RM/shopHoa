<link rel="stylesheet" type="text/css" href="/live/public/css/register.css">
<script src="/live/public/javascript/register.js"></script>
<div id="register">
    <form action="<?php echo getUrl("home");?>" name="login-user" method="POST" id="register-user">
        <h2>Đăng Ký</h2>
        <label class="label-register">Tên tài khoản *</label>
        <input type="text" name="user-register" id="user-register" class="form-register"> </br>
        <span class="error-register" id="error-user"></span></br> 

        <label class="label-register">Tài khoản email *</label>
        <input type="text" name="email-register" id="email-register" class="form-register"> </br>
        <span class="error-register" id="error-email"></span></br>

        <label class="label-register">Mật khẩu *</label>
        <input type="text" name="password-register" id="password-register" class="form-register"> </br>
        <span class="error-register" id="error-pass"></span></br> 

        <label class="label-register">Nhập lại mât khẩu *</label>
        <input type="text" name="repassword-register" id="repassword-register" class="form-register"> </br>
        <span class="error-register" id="error-repass"></span></br> 

        <label class="label-register">Số điện thoại *</label>
        <input type="text" name="phone-register" id="phone-register" class="form-register"> </br>
        <span class="error-register" id="error-phone"></span></br> 
        <span class="error-register" id="error-dangki"></span></br> 
        <button type="submit" name="submit-register" id="submit-register" clas="submit-register">Đăng ký</button>
        <div id="option">
            <h4>Đã có tài khoản ? <a href="<?php echo getUrl("user/login")?>"><b>Đăng nhập</b></a>
        </div>
    </form>
    <div class="alertRegister an-hien-thi">
        <button id="exit-alert"><i class="fa fa-times"></i></button>
        <div class="clear"></div>
        <div id="check-circle"><i class="fa fa-check-circle"></i></div>
        <span id="thongBao">Đăng ký thành công</span>
    </div>
    <div class="nen-mo an-hien-thi">
</div>