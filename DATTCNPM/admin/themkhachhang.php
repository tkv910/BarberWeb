<?php
    include 'config.php';
    // $sql_brand = "SELECT * FROM brands";
    // $query_brand = mysqli_query($connect, $sql_brand);

    if(isset($_POST['sbm'])){
        $diachi = $_POST['diachi'];
        $phone = $_POST['phone'];
        $tenkh = $_POST['tenkh'];
        $sql = "INSERT INTO khachhang (diachi, phone,tenkh) VALUES('$diachi', $phone, '$tenkh')";
        $query = mysqli_query($conn, $sql);
        header('location: quanlyuser.php');
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
            <h2>Thêm Khách Hàng</h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Số Điện Thoại</label>
                    <input type="number" name="phone" class="form-control">
                </div>

                <div class="form-group">
                    <label>Tên Khách Hàng</label>
                    <input type="text" name="tenkh" class="form-control">
                </div>

                <div class="form-group">
                    <label>Địa Chỉ</label>
                    <input type="text" name="Địa Chỉ" class="form-control">
                </div>
                <button name="sbm" class="btn btn-success">Thêm mới</button>
            </form>
        </div>
    </div>
</div>