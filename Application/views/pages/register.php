<link rel="stylesheet" type="text/css" href="/live/public/css/register.css">
<div id="register">
    <form action="#" name="login-user">
        <h2>Đăng Ký</h2>
        <label class="label-register">Tên tài khoản *</label>
        <input type="text" name="user-register" id="user-register" class="form-register"> </br>
        <span class="error-register" id=""></span></br> 
        <label class="label-register">Tài khoản email *</label>
        <input type="text" name="email-register" id="email-register" class="form-register"> </br>
        <span class="error-register" id=""></span></br> 
        <label class="label-register">Mật khẩu *</label>
        <input type="text" name="password-register" id="password-register" class="form-register"> </br>
        <span class="error-register" id=""></span></br> 
        <label class="label-register">Nhập lại mât khẩu *</label>
        <input type="text" name="repassword-register" id="repassword-register" class="form-register"> </br>
        <span class="error-register" id=""></span></br> 
        <label class="label-register">Số điện thoại *</label>
        <input type="text" name="phone-register" id="phone-register" class="form-register"> </br>
        <span class="error-register" id=""></span></br> 
        <button type="submit" name="submit-register" id="submit-register" clas="submit-register">Đăng ký</button>
        <div id="option">
            <h4>Đã có tài khoản ? <a href="<?php echo getUrl("user/login")?>"><b>Đăng nhập</b></a>
        </div>
    </form>
</div>