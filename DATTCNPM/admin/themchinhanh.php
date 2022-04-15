<?php
    include 'config.php';
    // $sql_brand = "SELECT * FROM brands";
    // $query_brand = mysqli_query($connect, $sql_brand);

    if(isset($_POST['sbm'])){
        $diachi = $_POST['diachi'];
        $hinhanh = $_FILES['hinhanh']['name'];
        $image_tmp = $_FILES['hinhanh']['tmp_name'];
        $nhanvien = $_POST['nhanvien'];
        $mathanhpho = $_POST['mathanhpho'];
        $quan = $_POST['quan'];
        $doanhthu = $_POST['doanhthu'];
        $sql = "INSERT INTO chinhanh (diachi, hinhanh, nhanvien, mathanhpho, quan, doanhthu) VALUES('$diachi', '$hinhanh', $nhanvien, '$mathanhpho', '$quan', '$doanhthu')";
        $query = mysqli_query($conn, $sql);
        move_uploaded_file($image_tmp, '../img/chinhanh/'.$hinhanh);
        header('location: quanlychinhanh.php');
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
            <h2>Thêm Chi Nhánh</h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Địa Chỉ</label>
                    <input type="text" name="diachi" class="form-control">
                </div>

                <div class="form-group">
                    <label>Hình Ảnh</label> <br>
                    <input type="file" name="hinhanh">
                </div>

                <div class="form-group">
                    <label>Thành Phố</label>
                    <input type="number" name="mathanhpho" class="form-control">
                </div>

                <div class="form-group">
                    <label>Số Lượng</label>
                    <input type="number" name="soluong" class="form-control">
                </div>
                <div class="form-group">
                    <label>Quận</label>
                    <input type="number" name="quan" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nhân Viên</label>
                    <input type="number" name="nhanvien" class="form-control">
                </div>
                <div class="form-group">
                    <label>Doanh Thu</label>
                    <input type="number" name="doanhthu" class="form-control">
                </div>
                <button name="sbm" class="btn btn-success">Thêm mới</button>
            </form>
        </div>
    </div>
</div>