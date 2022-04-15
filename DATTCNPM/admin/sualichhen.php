
<?php
$username = "root"; // Khai báo username
$password = ""; // Khai báo password
$server = "localhost"; // Khai báo server
$dbname = "barbershop"; // Khai báo database
// Kết nối database tintuc
include 'config.php';
    $id_lh = $_GET['id_lh'];
    $sql = "SELECT * FROM `lichhen` WHERE id_lh = $id_lh";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
$connect = mysqli_connect($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if (!$connect) {
    die("Không kết nối :" . mysqli_connect_error());
    exit();
}
if (isset($_POST['sua'])){
    $id_lh = $_GET['id_lh'];
    $name=$_POST['name'];
    $ngay=$_POST['ngay'];
    $chinhanh=$_POST['chinhanh'];
    $thoigian=$_POST['gio'].':'.$_POST['phut'];
    $tinhtrang=$_POST['tinhtrang'];
    $sql = "UPDATE lichhen SET name='$name', ngay = '$ngay', thoigian = '$thoigian', chinhanh = '$chinhanh', tinhtrang = '$tinhtrang'  WHERE id_lh=$id_lh";
    $query = mysqli_query($connect,$sql);
    if($query == TRUE){
        $_SESSION['update'] = "Cập nhật lịch hẹn thành công!";
        header("location:quanlylichhen.php");
    } 
    else{
        $_SESSION['update'] = "Quản Lý Lịch Hẹn Thất Bại!";
        header("location:quanlylichhen.php");
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
                    <label>Tên khách hàng</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
                </div>
                <div class="form-group">
                    <label>Ngày</label>
                    <input type="date" name="ngay" class="form-control" value="<?php echo $row['ngay']; ?>">
                </div>
                <div class="form-group">
                <label>Thời Gian</label>
                  <select class="col-3" name="gio">
                    <option value="7 giờ">7 giờ</option>
                    <option value="8 giờ">8 giờ</option>
                    <option value="9 giờ">9 giờ</option>
                    <option value="10 giờ">10 giờ</option>
                    <option value="11 giờ">11 giờ</option>
                                    <option value="12 giờ">12 giờ</option>
                    <option value="13 giờ">13 giờ</option>
                                    <option value="14 giờ">14 giờ</option>
                    <option value="15 giờ">15 giờ</option>
                                    <option value="16 giờ">16 giờ</option>
                    <option value="17 giờ">17 giờ</option>
                                    <option value="18 giờ">18 giờ</option>
                    <option value="19 giờ">19 giờ</option>
                                    <option value="20 giờ">20 giờ</option>
                    <option value="21 giờ">21 giờ</option>
                                    <option value="22 giờ">22 giờ</option>
                    <option value="23 giờ">23 giờ</option>
                                    </select>
                  <select class="col-3" name="phut" class="form-group col-auto">
                    <option value="00 phút">00 phút</option>
                    <option value="05 phút">05 phút</option>
                    <option value="10 phút">10 phút</option>
                    <option value="15 phút">15 phút</option>
                    <option value="20 phút">20 phút</option>
                    <option value="25 phút">25 phút</option>
                    <option value="30 phút">30 phút</option>
                    <option value="35 phút">35 phút</option>
                    <option value="40 phút">40 phút</option>
                    <option value="45 phút">45 phút</option>
                    <option value="50 phút">50 phút</option>
                    <option value="55 phút">55 phút</option>
                  </select>
                </div>
                <div class="form-group">
                    <label>Chi Nhánh</label>
                    <input type="text" name="chinhanh" class="form-control" value="<?php echo $row['chinhanh']; ?>">
                </div>
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