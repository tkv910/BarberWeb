<?php 
$username = "root"; // Khai báo username
$password = ""; // Khai báo password
$server = "localhost"; // Khai báo server
$dbname = "barbershop"; // Khai báo database
// Kết nối database tintuc
$connect = new mysqli($server, $username, $password, $dbname);
//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
     die("Không kết nối :" . $conn->connect_error);
    exit();
}//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$tenkh =" ";
$sanpham = " ";
$soluong = " ";
$giatien = " ";
$tinhtrang = " ";
$tongtien = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST["tenkh"])) { $tenkh = $_POST['tenkh']; }
	if(isset($_POST["sanpham"])) { $sanpham = $_POST['sanpham']; }
	if(isset($_POST["soluong"])) { $soluong =$_POST['soluong']; }
	if(isset($_POST["tongtien"])) { $tongtien =$_POST['tongtien']; }
	if(isset($_POST["tinhtrang"])) { $tinhtrang =$_POST['tinhtrang']; }

  $sql1 = "SELECT * FROM sanpham where product_name = '{$sanpham}'";
	$query =  $connect->query($sql1);
	$row = $query->fetch_array();
    $giatien = $row['product_cost'];
	$tongtien = $giatien * $soluong;
//Code xử lý, insert dữ liệu vào table
$sql = "INSERT INTO donhang(tenkh, tongtien, tinhtrang, sanpham, soluong)
VALUES ('$tenkh', '$tongtien', '$tinhtrang', '$sanpham', '$soluong' )";
    if ($connect->query($sql) === TRUE) {
        header("http://localhost/DATTCNPM/admin/quanlydonhang.php");
 } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
		header("quanlylichhen.php");
 }
}
//Đóng database
    $connect->close();
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
            <h2>Thêm Đơn Hàng</h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Tên Khách Hàng</label>
                    <input type="text" name="tenkh" class="form-control">
                </div>

                <div class="form-group">
                    <label>Sản Phẩm</label>
                    <select class="form-group col-12" name="sanpham">
                    <?php
                            $username = "root"; // Khai báo username
                              $password = ""; // Khai báo password
                              $server = "localhost"; // Khai báo server
                              $dbname = "barbershop"; // Khai báo database
                              // Kết nối database tintuc
                              $connect = new mysqli($server, $username, $password, $dbname);
                              //Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
                              if ($connect->connect_error) {
                                  die("Không kết nối :" . $conn->connect_error);
                              exit();
                              }
                            $id=$_GET['id'];
                            $sql = "SELECT * FROM `sanpham`";
                            $ket_qua =  $connect->query($sql);
                            $i=0;
                            while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
                            $i++;
					              ?>
                        <option value="<?php echo $row['product_name']?>"><?php echo $row['product_name']?></option>

                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Số Lượng</label>
                    <input type="number" name="soluong" value="1" min="0">
                </div>
                <div class="form-group">
                    <!-- <label>Tổng Tiền</label> -->
                    <input type="number" hidden name="tongtien" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tình Trạng</label>
                    <select name="tinhtrang" id="">
                        <option value="Đã Thanh Toán">Đã Thanh Toán</option>
                        <option value="Chưa Thanh Toán">Chưa Thanh Toán</option>
                        <option value="Đã Nhận Hàng">Đã Nhận Hàng</option>
                    </select>
                </div>
                <button name="sbm" class="btn btn-success">Thêm mới</button>
            </form>
        </div>
    </div>
</div>