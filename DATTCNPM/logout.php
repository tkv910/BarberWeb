<?php
session_start();
header('Content-Type: text/html; charset=UTF-8');
if (session_destroy()){
echo "Thoát thành công!";
header("location:account.php");
}
else{
echo "KO thể thoát dc, có lỗi trong việc hủy session";
header("location:index.php");
}
?>