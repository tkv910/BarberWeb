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
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
include "config.php";
$sql2 = "SELECT * FROM sanpham where id = $id";
$query = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($query);
$product_type = $row['product_type'];
$sql = "DELETE FROM sanpham WHERE id=$id";
if($connect->query($sql) == TRUE){
    header("location:quanlysanpham.php");
    $sql1 = "SELECT * FROM product_type where id = $product_type";
    $query1 = mysqli_query($conn, $sql1);
    $rows = mysqli_fetch_assoc($query1);
    $soluong = $soluong - 1;
    $sql3 = "update product type where id = $product_type set soluong = $soluong"; 
}
else{
    echo "lỗi xáo dữ liệu".$connect->error;
}
$connect->close();
?>