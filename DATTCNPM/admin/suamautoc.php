<?php
    include 'config.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM `mautoc` WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);

    if(isset($_POST['sbm'])){
        $title = $_POST['title'];
        $image_tmp = $_FILES['img']['tmp_name'];

        if($_FILES['img']['name'] == ""){
            $img = $row['img'];
        }else{
            $img = $_FILES['img']['name'];
            $image_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($image_tmp, '../img/kieutoc/'.$img);
        }
        $link_content = $_POST['link_content'];
        $sql = "UPDATE mautoc SET title = '$title', img = '$img', link_content ='$link_content' WHERE id = $id";

        $query = mysqli_query($conn, $sql);
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
            <h2>Sửa Mẫu Tóc</h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nội Dung</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>">
                </div>

                <div class="form-group">
                    <label>Ảnh Mẫu Tóc</label> <br>
                    <input type="file" name="img">
                </div>
                <div class="form-group">
                    <label>Bài Viết</label>
                    <input type="text" name="link_content" class="form-control" value="<?php echo $row['link_content']; ?>">
                </div>
                    <button name="sbm" class="btn btn-success">Sửa</button>
            </form>
        </div>
    </div>
</div>