<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="./css/login.css">
    <!-- <link rel="stylesheet" href="style.css">         -->
    <title>Login</title>
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Đăng nhập</span>
                <?php
							if (isset($_SESSION['login'])){
								echo $_SESSION['login'];
								unset($_SESSION['login']);
							}
							if(isset($_SESSION['no-login-message'])){
								echo $_SESSION['no-login-message'];
								unset($_SESSION['no-login-message']);
							}
						?>
                <form action="login_submit.php" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="Số điện thoại" name="username" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Mật khẩu" name="password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Ghi nhớ</label>
                        </div>
                        
                        <a href="#" class="text">Quên mật khẩu?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" name="login" value="Đăng Nhập Ngay">
                    </div>
                    <div class="login-box">
                        <a href="#" class="social-button" id="facebook-connect"> <span>Connect with Facebook</span></a>
                        <a href="#" class="social-button" id="google-connect"> <span>Connect with Google</span></a>
                      </div>
                   
                    
                </form>

                <div class="login-signup">
                    <span class="text">Chưa có tài khoản?
                        <a href="#" class="text signup-link">Đăng kí ngay</a>
                    </span>
                </div>
                
                
            </div>

            <!-- Form Đăng kí-->
            <div class="form signup">
                <span class="title">Đăng kí</span>

                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Tên đăng nhập" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Địa chỉ email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Mật khẩu" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Nhập lại mật khẩu" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    

                    <div class="input-field button">
                        <input type="button" value="Đăng Kí">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Đã có tài khoản?
                        <a href="#" class="text login-link">Đăng nhập ngay</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

</body>
</html>
