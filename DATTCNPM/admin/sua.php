<?php
    include 'config.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM sanpham WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);

    if(isset($_POST['sbm'])){
        $product_name = $_POST['product_name'];
        $image_tmp = $_FILES['product_img']['tmp_name'];

        if($_FILES['product_img']['name'] == ""){
            $product_img = $row['product_img'];
        }else{
            $product_img = $_FILES['product_img']['name'];
            $image_tmp = $_FILES['product_img']['tmp_name'];
            move_uploaded_file($image_tmp, 'img/sanpham/'.$product_img);
        }
        $product_cost = $_POST['product_cost'];
        $soluong = $_POST['soluong'];
        $sql = "UPDATE sanpham SET product_name = '$product_name', product_img = '$product_img', product_cost = $product_cost, soluong ='$soluong' WHERE id = $id";

        $query = mysqli_query($conn, $sql);
        header('location: quanlysanpham.php');
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
            <h2>Sửa sản phẩm</h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" name="product_name" class="form-control" value="<?php echo $row['product_name']; ?>">
                </div>

                <div class="form-group">
                    <label>Ảnh sản phẩm</label> <br>
                    <input type="file" name="product_img">
                </div>
                <div class="form-group">
                    <label>Giá sản phẩm</label>
                    <input type="number" name="product_cost" class="form-control" value="<?php echo $row['product_cost']; ?>">
                </div>
                <div class="form-group">
                    <label>Số Lượng</label>
                    <input type="number" name="soluong" class="form-control" value="<?php echo $row['soluong']; ?>">
                </div>
                    <button name="sbm" class="btn btn-success">Sửa</button>
            </form>
        </div>
    </div>
</div>