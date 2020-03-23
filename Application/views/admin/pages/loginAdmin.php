<link rel="stylesheet" type="text/css" href="/live/public/css/login.css">
<script src="/live/public/javascript/loginAdmin.js"></script>
<div id="login">
    <form action="http://localhost:8888/live/manage" name="login-user" method="POST" id="login-user">
        <h2>Đăng nhập tài khoản</h2>
        <input type="text" name="userLogin" id="user-login" class="form-login" placeholder="Email" value=""> </br>
        <input type="password" name="passwordLogin" id="password-login" class="form-login" placeholder="Password" value=""> </br>
        <div id="option">
            <div id="forgetPass"><h4><a href="#">Quên mật khẩu ?</a></div>
            <div class="clear"></div>
            <span class="error-login" id=""></span></br>
        </div>
        <button type="submit" name="btn-submit-login" id="btn-submit-login" class="btn-submit-login">Đăng nhập</button>
    </form>
</div>
<div class="formForgetPass an-hien-thi">
    <form action="#" name="forgetPass-user">
        <div id="heade-form-FGpass">
            <h2>Khôi phục tài khoản</h2>
            <button id="exit-formForgetPass"><i class="fa fa-times"></i></button>
            <div class="clear"></div>
        </div>
        <div id="text-forgetPass">Vui lòng nhập địa chỉ email bạn đã đăng ký.</br>
        Một tin nhắn xác nhận sẽ được gửi về email của bạn.
        </div>
        <input type="text" name="email-forgetPass" id="email-forgetPass" class="email-forgerPass" placeholder="Email"> </br>
        <button type="submit" name="btn-submit-forgetPass" id="btn-submit-forgetPass" clas="btn-submit-forgetPass">Tiếp tục</button>
    </form>
</div>
<div class="nen-mo an-hien-thi">
</div>