<?php
    include 'config.php';
    // $sql_brand = "SELECT * FROM brands";
    // $query_brand = mysqli_query($connect, $sql_brand);
    if(isset($_POST['sbm'])){
        $product_name = $_POST['product_name'];
        $product_img = $_FILES['product_img']['name'];
        $image_tmp = $_FILES['product_img']['tmp_name'];
        $product_cost = $_POST['product_cost'];
        $soluong = $_POST['soluong'];
        $product_oldcost = $_POST['product_oldcost'];
        $product_type = $_POST['product_type'];
        $sql = "INSERT INTO sanpham (product_name, product_img, product_cost, soluong, product_oldcost, product_type) VALUES('$product_name', '$product_img', $product_cost, '$soluong', '$product_oldcost', '$product_type')";
        $query = mysqli_query($conn, $sql);
        move_uploaded_file($image_tmp, '../img/sanpham/'.$product_img);
        header('location: quanlysanpham.php');
        $sql1 = "SELECT * FROM product_type where id = $product_type";
        $query1 = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_assoc($query1);
        $soluong = $row['sosp'];
        $sosp = $sosp + 1;
        $sql3 = "UPDATE product_type SET sosp ='$sosp' WHERE id = $product_type";
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
            <h2>Th??m s???n ph???m</h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>T??n s???n ph???m</label>
                    <input type="text" name="product_name" class="form-control">
                </div>

                <div class="form-group">
                    <label>???nh s???n ph???m</label> <br>
                    <input type="file" name="product_img">
                </div>

                <!-- <div class="form-group">
                    <label>S??? l?????ng s???n ph???m</label>
                    <input type="number" name="quantity" class="form-control">
                </div> -->

                <div class="form-group">
                    <label>Gi?? s???n ph???m</label>
                    <input type="number" name="product_cost" class="form-control">
                </div>

                <div class="form-group">
                    <label>S??? L?????ng</label>
                    <input type="number" name="soluong" class="form-control">
                </div>
                <div class="form-group">
                    <label>Lo???i S???n Ph???m</label>
                    <input type="number" name="product_type" class="form-control">
                </div>
                <div class="form-group">
                    <label>Gi?? C??</label>
                    <input type="number" name="product_oldcost" class="form-control">
                </div>
                <button name="sbm" class="btn btn-success">Th??m m???i</button>
            </form>
        </div>
    </div>
</div>