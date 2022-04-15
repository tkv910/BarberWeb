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
$name =" ";
$phone = " ";
$ngay = " ";
$thoigian = " ";
$chinhanh = " ";
$dichvu = " ";
$note = " ";
$tongtien = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST["name"])) { $name = $_POST['name']; }
	if(isset($_POST["phone"])) { $phone = $_POST['phone']; }
	if(isset($_POST["ngay"])) { $ngay =$_POST['ngay']; }
	if(isset($_POST["chinhanh"])) { $chinhanh =$_POST['chinhanh']; }
	if(isset($_POST["gio"]) && isset($_POST["phut"])) { $thoigian = $_POST['gio'].':'.$_POST['phut'];}
	if(isset($_POST["note"])) { $note =$_POST['note']; }
	if(isset($_POST["dichvu"])) { $dichvu =$_POST['dichvu']; }
	if(isset($_POST["tongtien"])) { $tongtien =$_POST['tongtien']; }

  $sql1 = "SELECT * FROM dichvu where tendichvu = '{$dichvu}'";
	$query =  $connect->query($sql1);
	$row = $query->fetch_array();
	$tongtien = $row['phidichvu'];
//Code xử lý, insert dữ liệu vào table
$sql = "INSERT INTO lichhen(name, phone, ngay, thoigian, note, chinhanh,dichvu,tongtien)
VALUES ('$name', '$phone', '$ngay','$thoigian','$note', '$chinhanh', '$dichvu', '$tongtien')";
    if ($connect->query($sql) === TRUE) {
        header("http://localhost/DATTCNPM/admin/quanlylichhen.php");
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
            <h2>Thêm Lịch Hẹn</h2>
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Tên Khách Hàng</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                    <label>Số Điện Thoại</label>
                    <input type="number" name="phone" class="form-control">
                </div>

                <div class="form-group">
                    <label>Ngày</label>
                    <input type="date" name="ngay" class="form-control">
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
                    <select class="form-group col-12" name="chinhanh">
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
                            $sql = "SELECT * FROM `chinhanh`";
                            $ket_qua =  $connect->query($sql);
                            $i=0;
                            while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
                            $i++;
					              ?>
                        <option value="<?php echo $row['diachi']?>"><?php echo $row['diachi']?></option>
                        <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                    <label>Dịch Vụ</label>
                    <select class="form-group col-12" name="dichvu">
                  <option value="Chọn dịch vụ">Chọn dịch vụ</option>
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
                            $sql = "SELECT * FROM `dichvu`";
                            $ket_qua =  $connect->query($sql);
                            $i=0;
                            while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
                            $i++;
					              ?>
                        <option value="<?php echo $row['tendichvu']?>"><?php echo $row['tendichvu']?>
                        <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                    <label>Ghi chú</label>
                    <textarea name="note" class="form-control" id="" cols="30" rows="5" placeholder="Message"></textarea>
                </div>
                <button name="sbm" class="btn btn-success">Thêm mới</button>
            </form>
        </div>
    </div>
</div>