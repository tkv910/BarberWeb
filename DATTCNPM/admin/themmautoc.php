<?php
    include 'config.php';
    // $sql_brand = "SELECT * FROM brands";
    // $query_brand = mysqli_query($connect, $sql_brand);

    if(isset($_POST['sbm'])){
        $title = $_POST['title'];
        $img = $_FILES['img']['name'];
        $image_tmp = $_FILES['img']['tmp_name'];
        $link_content = $_POST['link_content'];
        $sql = "INSERT INTO mautoc (title, img, link_content) VALUES('$title', '$img', '$link_content')";
        $query = mysqli_query($conn, $sql);
        move_uploaded_file($image_tmp, '../img/kieutoc/'.$img);
        header('location: quanlymautoc.php');
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
            <h2>Thêm Mẫu Tóc</h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nội Dung</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label>Ảnh Mẫu Tóc</label> <br>
                    <input type="file" name="img">
                </div>

                <div class="form-group">
                    <label>Bài Viết</label>
                    <input type="text" name="link_content" class="form-control">
                </div>
                <button name="sbm" class="btn btn-success">Thêm mới</button>
            </form>
        </div>
    </div>
</div>