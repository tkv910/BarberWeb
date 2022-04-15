<?php
    include 'config.php';
    // $sql_brand = "SELECT * FROM brands";
    // $query_brand = mysqli_query($connect, $sql_brand);
    if(isset($_POST['sbm'])){
        $name = $_POST['name'];
        $img = $_FILES['img']['name'];
        $image_tmp = $_FILES['img']['tmp_name'];
        $descript = $_POST['descript'];
        $sql = "INSERT INTO product_type (name, img, descript) VALUES('$name', '$img', '$descript')";
        $query = mysqli_query($conn, $sql);
        move_uploaded_file($image_tmp, '../img/sanpham/'.$product_img);
        header('location: quanlyloaisanpham.php');
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
            <h2>Thêm Loại Hàng</h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Tên Loại Hàng</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Ảnh Loại Hàng</label> <br>
                    <input type="file" name="img">
                </div>

                <!-- <div class="form-group">
                    <label>Số lượng sản phẩm</label>
                    <input type="number" name="quantity" class="form-control">
                </div> -->

                <div class="form-group">
                    <label>Đặc Tả</label>
                    <input type="text" name="descript" class="form-control">
                </div>
                <button name="sbm" class="btn btn-success">Thêm mới</button>
            </form>
        </div>
    </div>
</div>