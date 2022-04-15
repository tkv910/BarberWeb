<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập  </title>
    <link rel="stylesheet" href="account.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="img/logo1.png" width="250px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">TRANG CHỦ</a></li>
                    <li><a href="hanhtrinhtoasang.php">HÀNH TRÌNH TỎA SÁNG</a></li>
                    <li><a href="datlich.php">ĐẶT LỊCH</a></li>
                    <li><a href="searchshop.php">TÌM SHOP GẦN NHẤT</a></li>
                    <li><a href="account.php">ĐĂNG NHẬP</a></li>
                </ul>
            </nav>
            <!-- <a href="cart.html"><img src="image/cart.png" width="30px" height="30px"></a>
            <img src="photo/menu.png" class="menu-icon"
             onclick="menutoggle()">                -->
        </div>
    </div> 
<!-----------Account page---------->
<div class="account-page" style="background: radial-gradient(#c31432, #240b36);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <img src="iMG/logo.png" width="100%">
            </div>

            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Đăng nhập</span>
                        <span onclick="register()">Đăng ký</span>
                        <hr id="Indicator">
                    </div>

                    <form id="LoginForm" action="login_submit.php" method="post">
                        <input type="text" placeholder="Số điện thoại" name="username">
                        <input type="password" placeholder="Mật khẩu" name="password">
                        <input type="password" placeholder="Mật khẩu" name="password">
                        <button type="submit" name="login" class="btn">Đăng nhập </button>
                        <a href="">Quên mật khẩu ?</a>
                    </form>
                </div>
            </div>

    </div>
</div>
</div>




<!----------footer----------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>QDB Barber</h3>
                    <p>Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh thần mới mà người đàn ông luôn hướng 
                        đến để tìm thấy phiên bản tốt nhất của chính mình. Hãy cùng lắng nghe những câu chuyện hành trình lột xác dưới đây để tìm thấy niềm cảm hứng đổi mới cho bạn.</p>
                </div>
                <div class="footer-col-2">
                    <img src="img/logo.png" >
                    
                </div>
                <div class="footer-col-3">
                    <h3>Working Hours</h3>
                    <ul>
                        <li>Monday - Saturday</li>
                        <li>9:00 AM - 9:00 PM</li>
                        <li>Sunday</li>
                        <li>8:00 AM - 7:00PM</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Contact</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
           
        </div>
    </div>
<!---------js for menu--------->
    <script>
        var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px";
                }
            else
                {
                    MenuItems.style.maxHeight = "0px";
                }
               
}
    </script>

<!---------js for toggle form--------->
    <script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");
        function register(){

            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }

        function login(){

            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }


    </script>
    

</body>
</html>