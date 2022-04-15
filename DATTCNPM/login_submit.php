
<?php
    session_start();
    include "config.php";
    if(isset($_POST['login']) && $_POST['username'] != '' && $_POST['password'] != ''){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password =md5($password);
        $sql = "SELECT * FROM khachhang WHERE username='$username' AND password ='$password' AND type = 'user' ";
        $sql2 = "SELECT * FROM khachhang WHERE username='$username' AND password ='$password' AND type = 'admin'";

        // $type = "SELECT type FROM user WHERE username='$username'";
        $user = mysqli_query($conn,$sql);
        $admin = mysqli_query($conn,$sql2);
        if (mysqli_num_rows($admin) > 0){
            echo "Đăng nhập thành công!";
            header("location: admin/index.php");
            $_SESSION["user"] = $username;
        } 
        elseif (mysqli_num_rows($user) > 0 ){
            echo "Đăng nhập thành công!";
            header("location: index.php");
            $_SESSION["user"] = $username;
        }
        else{
            echo "Bạn đã nhập sai Tên đăng nhập hoặc mật khẩu";
            header("location: account.php");
            
        }
    }
    else{ 
        header("location: account.php");
    }

?>