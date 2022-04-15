<?php
    include 'config.php';
    // $sql_brand = "SELECT * FROM brands";
    // $query_brand = mysqli_query($connect, $sql_brand);

    if(isset($_POST['sbm'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $hoten = $_POST['hoten'];
        $type = $_POST['type'];
        $sql = "INSERT INTO `khachhang` (username, password,hoten , type) VALUES('$username', '$password', '$hoten', '$type')";
        $query = mysqli_query($conn, $sql);
        // move_uploaded_file($image_tmp, '../img/kieutoc/'.$img);
        header('location: quanlynhanvien.php');
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        label{
            font-weight: 500;
        }

        .card input[type="search"]{
            margin-right: -6px;
        }

        .card input[type="search"]:focus, .card-header button:focus{
            box-shadow: none!important;   
        }

        .card-header button{
            width: 140px;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
    </style>
    <title>Document</title>
    
</head>
<div class="container-fluid">
    <div class="card">  
        <div class="card-header">
            <h2>Thêm Nhân Viên</h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Tài Khoản</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label>Họ Tên</label> <br>
                    <input type="text" name="hoten">
                </div>

                <div class="form-group">
                    <label>Mật Khẩu</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input type="hidden" name="type" value="admin" class="form-control">
                <button name="sbm" class="btn btn-success">Thêm mới</button>
            </form>
        </div>
    </div>
</div>