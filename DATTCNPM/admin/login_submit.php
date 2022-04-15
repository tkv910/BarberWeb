<?php
    session_start();
    include "config.php";
    $type = " ";
    if(isset($_POST['login']) && $_POST['username'] != '' && $_POST['password'] != ''){
        $username = $_POST["username"];
        $password = $_POST["password"];
        // $type = $_POST["type"];
        $password =md5($password);
        $sql = "SELECT * FROM khachhang WHERE username='$username' AND password ='$password' AND type = 'admin' ";
        $user = mysqli_query($conn,$sql);
        if (mysqli_num_rows($user) > 0){
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