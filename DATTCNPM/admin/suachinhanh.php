<?php
    include 'config.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM `chinhanh` WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);

    if(isset($_POST['sua'])){
        $nhanvien = $_POST['nhanvien'];
        $doanhthu = $_POST['doanhthu'];
        $sql = "UPDATE `chinhanh` SET nhanvien = '$nhanvien', doanhthu = '$doanhthu' WHERE id = $id";

        $query = mysqli_query($conn, $sql);
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
            <h2>Cập Nhật Lịch Hẹn</h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nhân Viên</label>
                    <input type="number" name="nhanvien" class="form-control" value="<?php echo $row['nhanvien']; ?>">
                </div>
                <div class="form-group">
                    <label>Doanh Thu</label>
                    <input type="number" name="doanhthu" class="form-control" value="<?php echo $row['doanhthu']; ?>">
                </div>
                    <input type="submit" name="sua" class="btn btn-success"></input>
            </form>
        </div>
    </div>
</div>