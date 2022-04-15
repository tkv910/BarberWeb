<?php
$username = "root"; // Khai báo username
$password = ""; // Khai báo password
$server = "localhost"; // Khai báo server
$dbname = "barbershop"; // Khai báo database
// Kết nối database tintuc
$connect = mysqli_connect($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if (!$connect) {
    die("Không kết nối :" . mysqli_connect_error());
    exit();
}
if (isset($_POST['sua'])){
    $id=$_GET['id'];
    $tinhtrang=$_POST['tinhtrang'];
    $sql = "UPDATE donhang SET tinhtrang='$tinhtrang'  WHERE id=$id";
    $query = mysqli_query($connect,$sql);
    if($query == TRUE){
        $_SESSION['update'] = "Update Đơn Hàng Successfully!";
        header("location:quanlydonhang.php");
    } 
    else{
        $_SESSION['update'] = "Update Đơn Hàng to Failed!";
        header("location:quanlydonhang.php");
    }
    $connect->close();
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
                <label>Tình Trạng</label>
                    <select name="tinhtrang" >
                        <option value="Đã Huỷ">Đã Huỷ</option>
                        <option value="Đang Chờ">Đang Chờ</option>
                        <option value="Đã Thanh Toán">Đã Thanh Toán</option>
                    </select>
                </div>
                    <input type="submit" name="sua" class="btn btn-success"></input>
            </form>
        </div>
    </div>
</div>