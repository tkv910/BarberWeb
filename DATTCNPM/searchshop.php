<?php
  include "header.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/boostrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="remixicons/fonts/remixicon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css"> 
    <title>hair salon</title>
</head>
<body id="home" data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- SEARCH SHOP -->
    <div id="searchshop">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-4 searchshop">
                    <a href=""><button><i class="ri-search-2-line"></i>TÌM SALON GẦN NHẤT</button></a>
                </div>
                <div class="col-lg-4 col-md-4 searchshop">   
                  <form action="" class="thanhpho" method="POST">
                    <select name="" id="province">
                        <option value="Tỉnh/Thành Phố">Tỉnh/Thành Phố</option>
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
                            $sql = "SELECT * FROM thanhpho";
                            $ket_qua =  $connect->query($sql);
                            $i=0;
                            while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
                            $i++;
					              ?>
                        <a href=""><option value="<?php echo $row['thanhpho']?>"><?php echo $row['thanhpho']?></option></a>
                        <?php } ?>
                        <input type="submit" value="tìm thanh pho" name="search-tp" hidden>
                    </select>
                    </form>
                </div>
                
                <div class="col-lg-4 col-md-4 searchshop">
                  <form action="" method="POST" class="quan">
                    <select name="" id="district">
                        <option value="Quận Huyện">Quận Huyện</option>
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
                              
                              if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                                $matp = "";
                                $sql1 = "SELECT * FROM thanhpho id = '{$matp}'";
	                              $query =  $connect->query($sql1);
	                              $row = $query->fetch_array();
	                              $matp = $row['id'];
                                $sql = "SELECT * FROM quan";
                            $ket_qua =  $connect->query($sql);
                            $i=0;
                            while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
                            $i++;
					              ?>   
                        <a href="product.php"><option value="<?php echo $row['tenquan']?>"><?php echo $row['tenquan']?></option></a>
                        <?php } }?>
                        <!-- <option value="Quận 1">Quận 1</option>
                        <option value="Quận 2">Quận 2</option>
                        <option value="Quận Gò Vấp">Quận Gò Vấp</option>
                        <option value="Quận 12">Quận 12</option>
                        <option value="Quận Bình Thạnh">Quận Bình Thạnh</option>
                        <option value="Quận Phú Nhuận">Quận Phú Nhuận</option> -->
                    </select>
                    <input type="submit" hidden value="Tìm Thành Phố" name="seach-quan">
                    </form>
                </div>
                <div class="shop-search col-lg-4 col-md-4">
                  <ul class="shop-addr">
                      <a href=""><li class="shop-addr">TP. Hồ Chí Minh(24)</li><hr></a>
                      <a href=""><li class="shop-addr">Đà Nẵng (5)</li><hr></a>
                      <a href=""><li class="shop-addr">Hà Nội (16)</li><hr></a>
                      <a href=""><li class="shop-addr">An Giang (5)</li><hr></a>
                      <a href=""><li class="shop-addr">Vũng Tàu (5)</li><hr></a>
                      <a href=""><li class="shop-addr">Đồng Nai (5)</li><hr></a>
                      <a href=""><li class="shop-addr">Bình Dương (7)</li></a>
                  </ul>
                </div>
                <div class="shop-search col-lg-4 col-md-4">
                  <img src="img/hanoi.png" alt="">
                  <p>56 Nguyễn Huy Tưởng, P. TX Trung, Q. Thanh Xuân, Hà Nội</p>
                  <a href=""><button class="addr"><i class="ri-phone-fill"></i>HOTLINE: 1800.28.28.30</button></a>
                </div>
                <div class="shop-search col-lg-4 col-md-4">
                  <img src="img/tphcm.png" alt="">
                  <p>76 Phan Văn Hớn, P. Tân Thới Nhất, Quận 12, TP Hồ Chí Minh</p>
                  <a href=""><button class="addr"><i class="ri-phone-fill"></i>HOTLINE: 1800.28.28.30</button></a>
                </div>
            </div>
            <div class="row">
              
            </div>
          </div>
    </div>
    <!-- SEARCH SHOP -->
  </body>
</html>

<?php
  include "footer.php"
?>