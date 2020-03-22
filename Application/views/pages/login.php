<link rel="stylesheet" type="text/css" href="/live/public/css/login.css">
<script src="/live/public/javascript/login.js"></script>
<div id="login">
    <form action="#" name="login-user">
        <h2>Đăng nhập tài khoản</h2>
        <input type="text" name="user-login" id="user-login" class="form-login" placeholder="Email"> </br>
        <input type="password" name="password-login" id="user-login" class="form-login" placeholder="Password"> </br>
        <div id="option">
            <div id="forgetPass"><h4><a href="#">Quên mật khẩu ?</a></div>
            <div id="dangki"><a href="http://localhost:8888/live/user/register"><b>Đăng ký</b></a></h4> </div>
            <div class="clear"></div>
        </div>
        <button type="submit" name="submit-login" id="submit-login" clas="submit-login">Đăng nhập</button>
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
        <button type="submit" name="submit-forgetPass" id="submit-forgetPass" clas="submit-forgetPass">Tiếp tục</button>
    </form>
</div>
<div class="nen-mo an-hien-thi">
</div>