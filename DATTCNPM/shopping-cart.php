<?php
    include "header.php";
?>
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
                $product_name = "";
                $product_cost = " ";
                $product_img = " ";
                $tongtien = 0;
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if(isset($_POST["product_name"])) { $product_name = $_POST['product_name']; }
                    if(isset($_POST["product_cost"])) { $product_cost = $_POST['product_cost']; }  
                    if(isset($_POST["product_img"])) { $product_img =$_POST['$product_img']; }
                    if(isset($_POST["soluong"])) { $soluong =$_POST['soluong']; }
                    $tongtien = ((int)$product_cost * (int)$soluong);
					// $id_user = "";
					// $sql1 = "SELECT id FROM user";
	            	// $ket_qua =  $connect->query($sql1);
					// $row = $ket_qua->fetch_array(MYSQLI_ASSOC);
					// $id_user = $row['id'];
					$sql2 = "SELECT * FROM giohang WHERE product_name = '$product_name'";
					$ketqua1 = $connect->query($sql2);
					$rows = $ketqua1->fetch_array(MYSQLI_ASSOC);
					if($rows ==  0){
						$sql = " INSERT INTO giohang (product_name,soluong,product_cost,tongtien, id_user,product_img)
						values ('$product_name','$soluong', '$product_cost', '$tongtien',' ', '$product_img')";
                        // move_uploaded_file($hinhanh_tmp, 'img/sanpham/'.$product_img);
						$res = $connect->query($sql);
						// if($res == TRUE){
						// 	$_SESSION['order'] = "<div class='success text-center'>Đơn hàng đã được đặt thành công.</div>";
						// 	header('location:cart_order.php');
						// }
					}
					else{
						$soluong = $soluong + $rows['soluong'];
						$tongtien = $tongtien + $rows['tongtien'];
						$sql = "update giohang set product_name = '$product_name' ,soluong = '$soluong', product_cost = '$product_cost', tongtien = '$tongtien' where product_name = '$product_name'";
						$res = $connect->query($sql);
						// if($res == TRUE){
						// 	$_SESSION['order'] = "<div class='success text-center'>Đơn hàng đã được đặt thành công.</div>";
						// 	header('location:cart_order.php');
						// }
					}
				}
				$connect->close();
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
    <section id="shopping-cart">
        <div class="container">
        <h3>GIỎ HÀNG</h3>
            <div class="row gy-5"> 
                <div class="col-lg-9 shopping-cart">
                    <table class="shopping__cart">
                        <tr>
                            <th style="width: 12%;"><input type="checkbox" class="shopping__cart-item"></th>
                            <th style="width: 100%;">Sản Phẩm</th>
                            <th style="width: 20%;">Đơn Giá</th>
                            <th style="width: 50px;">Số Lượng</th>
                            <th style="width: 20%;">Tạm Tính</th>
                            <th style="width: 5%;"></th>
                        </tr>
                        <?php
                            $username = "root"; // Khai báo username
                           $password = ""; // Khai báo password
                           $server = "localhost"; // Khai báo server
                           $dbname = "barbershop"; // Khai báo database
                           // Kết nối database tintuc
                           $conn = mysqli_connect($server, $username, $password, $dbname);
           
                           //Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
                           if (!$conn) {
                               die("Không kết nối :" . mysqli_connect_error());
                               exit();
                           }
                            $result=mysqli_query($conn, "SELECT COUNT(id) as total FROM giohang");
                            $row = mysqli_fetch_assoc($result);
                            $totalRecords = mysqli_query($conn, "SELECT COUNT(id) as total FROM giohang");
                            $totalRecords = $totalRecords->num_rows;
                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $limit = 8;


                            $total_page = ceil($totalRecords / $limit);

                            if ($current_page > $total_page){
                                $current_page = $total_page;
                            }
                            else if ($current_page < 1){
                                $current_page = 1;
                            }
                            
                            $start = ($current_page - 1) * $limit;
                            $result = mysqli_query($conn, "SELECT * FROM `giohang` LIMIT $start, $limit");
                            // $results = mysqli_query($conn, "SELECT * FROM `product` ");
                            $i=0;
                            $thanhtien = 0;
                            $tongtien = 0;
                            $tamtinh = 0;
                            while ($row = mysqli_fetch_assoc($result)){              
                            $i++;	
                            $tamtinh = $tamtinh + $row['tongtien'];	
                            $thanhtien = $tamtinh - ($tamtinh * 0.1);

                        ?>
                        <tr>
                            <td><input type="checkbox" class="shopping__cart-item"></td>
                            <td><img src="img/sanpham/<?php echo $row['product_img']?>" alt=""></td>
                            <td>
                                <ul class="product__cost">
                                    <li class="product__cost-new"><?php echo number_format($row['product_cost'], 0, ",", ".")?></li>
                                    <!-- <li class="product__cost-old"><del>299.000</del></li>
                                    <li class="product__cost-decrea">-14%</li> -->
                                </ul>
                            </td>
                            <td>
                                <ul class="quantity">
                                        <input class="minus is-form" type="button" value="-">
                                        <input aria-label="quantity" class="input-qty" max="<?php echo $row['soluong']?>" min="1" name="soluong" type="number" value="<?php echo $row['soluong']?>">
                                        <input class="plus is-form" type="button" value="+">
                                </ul>
                            </td>
                            <td>
                                <p><?= number_format($row['tongtien'], 0, ",", ".") ?>đ</p>
                            </td>
                            <td>
                                <a href="delete_cart.php?id=<?php echo $row['id']?>"><i class="ri-delete-bin-5-line"></i></a>
                            </td>
                        </tr>
                        <?php }?>
                    </table>
                </div>
                <div class="col-lg-3 thongtindonhang">
                    <h6>THÔNG TIN ĐƠN HÀNG</h6>
                    <hr>
                    <ul class="product-cost">
                        <li class="product-cost"><B>Tạm tính</B> (0 sản phẩm)</li>
                        <li class="product-cost"><?php echo number_format($tamtinh, 0, ",", ".")?>đ</li>
                    </ul>
                    <hr>
                    <ul class="product-cost">
                        <li class="product-cost"><b>Tổng Tiền</b></li>
                        <li class="product-cost"><?php echo number_format($thanhtien, 0, ",", ".")?>đ</li>
                    </ul>
                    <hr>
                    <input type="submit" value="TIẾN HÀNH ĐẶT HÀNG">
                </div>
                <h1 class="text-color">Sản Phẩm Liên Quan</h1>
                <div class="row gy-5 shopping-cartslide">
                    
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
                                // $product_type=$_GET['product_type'];
                                $sql = "SELECT * FROM sanpham where product_type = `product_type`";
                                $ket_qua =  $connect->query($sql);
                                      $i=0;
                                  while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
                                  $i++;
                            ?>
                        <div class="col-lg-3 col-md-6 product-new">
                            <div class="product-link"><a href="product-details.php?id=<?= $row['id']?>">
                            <img src="img/sanpham/<?php echo $row['product_img']; ?>" alt="">
                            <div class="social-links">
                                <a href="#" class="social__links"><i class="ri-heart-fill"></i></a>
                                <a href="#" class="social__links"><i class="ri-shopping-bag-line"></i></a>
                            </div> 
                            <p class="descript"><a href="product_details.php?id=<?= $row['id']?>"><?= $row['product_name'] ?></a></p>
                            <ul class="price">
                                <li class="price-now">
                                    <p><?= number_format($row['product_cost'], 0, ",", ".") ?></p>
                                </li>
                                <li class="price-old"><del><?= number_format($row['product_oldcost'], 0, ",", ".") ?></del></li>
                            </ul>
                            <ul class="rating">
                                <li class="rating"><i class="ri-star-fill"></i></li>
                                <li class="rating"><i class="ri-star-fill"></i></li>
                                <li class="rating"><i class="ri-star-fill"></i></li>
                                <li class="rating"><i class="ri-star-fill"></i></li>
                                <li class="rating"><i class="ri-star-fill"></i></li>
                            </ul>
                            <?php
                        ?> 
                            </div></a>
                        </div>
                        <?php } ?>
                    </div>
            </div>
        </div>
    </section>
    <script>
        $('input.input-qty').each(function() {
        var $this = $(this),
            qty = $this.parent().find('.is-form'),
            min = Number($this.attr('min')),
            max = Number($this.attr('max'))
        if (min == 0) {
            var d = 0
        } else d = min
        $(qty).on('click', function() {
            if ($(this).hasClass('minus')) {
            if (d > min) d += -1
            } else if ($(this).hasClass('plus')) {
            var x = Number($this.val()) + 1
            if (x <= max) d += 1
            }
            $this.attr('value', d).val(d)
        })
        })
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $('.shopping-cartslide').slick({
  slidesToShow: 4,
  slidesToScroll: 1, 
  arrows:true,
  Infinity:true
});

var filtered = false;

$('.js-filter').on('click', function(){
  if (filtered === false) {
    $('.filtering').slick('slickFilter',':even');
    $(this).text('Unfilter Slides');
    filtered = true;
   } else {
    $('.filtering').slick('slickUnfilter');
     $(this).text('Filter Slides');
     filtered = false;
   }
});
  </script>
</body>
</html>

<?php
  include "footer.php"
?>

<?php
    include "footer.php";
?>