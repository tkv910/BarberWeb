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
    <section id="product-detail">
        <div class="container">
            <div class="row">
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
						$sql = "SELECT * FROM sanpham where id = $id";
						$ket_qua =  $connect->query($sql);
							  $i=0;
						  while ($row = $ket_qua->fetch_array(MYSQLI_ASSOC)) {
						  $i++;
					?>
                <div class="col-lg-4">
                    <img src="img/sanpham/<?php echo $row['product_img']; ?>" alt="">
                    <ul class="product-slideimg">
                    <li>
                        <img src="img/sanpham/<?php echo $row['product_img']; ?>" alt="">
                        <img src="img/sanpham/<?php echo $row['product_img']; ?>" alt="">
                        <img src="img/sanpham/<?php echo $row['product_img']; ?>" alt="">
                    </li>
                    </ul>
                </div>
                <div class="col-lg-5 product-detail">
                    <form  class="datmon" method="POST" action="shopping-cart.php?id=<?php echo $row['id']?>" enctype="multipart/form-data">
                    <input type="hidden" class="hinhanh" name="product_img" value="<?php echo $row['product_img'];?>">
                    <input class="product-name" type="text" name="product_name" value="<?php echo $row['product_name']?>">   
                    <ul class="product_evaluate">
                        <li class="product_evaluate">0 đánh giá</li>
                        <li class="product_evaluate">
                            <i class="ri-heart-line heart"></i>
                            <i class="ri-share-line share"></i>
                        </li>
                    </ul>  
                    <input class="product-cost" type="text" name="product_cost" value="<?php echo $row['product_cost']?>đ">
                    <ul class="product-priceold">
                            <li><p class="product-old">
                                <del><?= number_format($row['product_oldcost'], 0, ",", ".") ?><sup>đ</sup></del>
                            </p></li>
                            <li><div class="product-descre">
                                Giảm <?php echo round(100-(($row['product_cost']/$row['product_oldcost'])*100))?>%
                            </div>
                    </ul>
                    <ul class="quantity">
                        <li class="quantity"><p>Số lượng:</p></li>
                        <li class="quantity">
                            <input class="minus is-form" type="button" value="-">
                            <input aria-label="quantity" class="input-qty" max="<?php echo $row['soluong']?>" min="1" name="soluong" type="number" value="1">
                            <input class="plus is-form" type="button" value="+">
                        </li>
                    </ul>
                    <ul class="button">
                        <li class="button-addcart">
                        <input class="addcart" type="submit" name="muahang" value="Thêm Vào Giỏ Hàng">
                        </li>
                        <li class="button-buy">
                            <!-- <input name="buynow" type="submit" class="buy" value="Mua Ngay"> -->
                        </li>
                    </ul>
                </form>	
                </div>
                <div class="col-lg-3">
                    <ul class="policy">
                        <li class="policy">
                            <img src="img/policy/h1.png" alt="">
                            <p>Cam kết 7 ngày hiệu quả</p>
                        </li>
                        <li class="policy">
                            <img src="img/policy/h2.png" alt="">
                            <p>Mua 1 hưởng 5 đặc quyền</p>
                        </li>
                        <li class="policy">
                            <img src="img/policy/h3.png" alt="">
                            <p>Chính sách hoàn tiền 120%</p>
                        </li>
                        <li class="policy">
                            <img src="img/policy/h4.png" alt="">
                            <p>Chất lượng sản phẩm cấp cao nhất/p>
                        </li>
                        <li class="policy">
                            <img src="img/policy/h5.png" alt="">
                            <p>Giao hàng siêu tốc 2h</p>
                        </li>
                        <li class="policy">
                            <img src="img/policy/h6.png" alt="">
                            <p>Đổi trả tận nơi trong 24h</p>
                        </li>
                        <li class="policy">
                            <img src="img/policy/h7.png" alt="">
                            <p>Tổng đài tư vấn mọi lúc mọi nơi</p>
                        </li>
                        <li class="policy">
                            <img src="img/policy/h8.png" alt="">
                            <p>An toàn chuẩn giao vận quốc tế</p>
                        </li>
                    </ul>
                </div>
                
                <div class="thongtinsanpham col-lg-9">
                <button class="thongtinsanpham">Thông Tin Sản Phẩm</button>
                    <div class="noidung">
                        <p><b>Nước Hoa Hồng Simple Dành Cho Da Nhạy Cảm Kind to Skin Soothing Facial Toner 200ml </b> đến từ <b>thương hiệu chăm sóc da Simple </b> xuất xứ Anh Quốc là sản phẩm Toner không chứa cồn được thiết kế phù hợp cho làn da nhạy cảm và dễ nổi mụn, giúp làm sạch sâu và cân bằng độ pH, cung cấp độ ẩm dịu nhẹ cho làn da, mang lại cảm giác tươi mát và sảng khoái sau khi sử dụng. </p>
                        <img src="img/sanpham/<?php echo $row['product_img']; ?>" alt="">    
                        <ul class="thichung">
                            <p>Loại da phù hợp:</p>
                            <li class="thichung">
                            Sản phẩm phù hợp cho mọi loại da.
                            </li>
                        </ul>
                        <ul class="giaiphap">
                            <p>Giải pháp cho tình trạng da:</p>
                            <li class="giaiphap">
                            Da nhạy cảm, dễ kích ứng
                            </li>
                            <li class="giaiphap">
                            Da thiếu ẩm, thiếu nước
                            </li>
                        </ul>
                        <ul class="uuthe">
                        <p>Ưu thế nổi bật:</p>
                        <li class="uuthe">
                        Chứa Vitamin B5 (Panthenol) và Allantoin giúp làm dịu da, giảm mẩn đỏ, kích ứng và hỗ trợ phục hồi làn da khỏe mạnh.
                        </li>
                        <li class="uuthe">
                        Chiết xuất cây Phỉ (Witch Hazel) giúp làm sạch sâu, điều tiết lượng dầu thừa và hỗ trợ thu nhỏ lỗ chân lông, đồng thời ngăn ngừa viêm nhiễm, kháng khuẩn cho da mụn.
                        </li>
                        <li class="uuthe">
                        Lý tưởng để sử dụng sau bước rửa mặt và trước kem dưỡng ẩm vào buổi sáng & tối để giúp loại bỏ bụi bẩn và cặn trang điểm còn sót lại trên da.
                        </li>
                        </ul>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Sản Phẩm Liên Quan -->
    <section id="product-new" style="padding-top: 50px; background-color: #151828;">
        <div class="container">
            <div class="row gy-5 product__detail">
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
    </section>
    <!-- Sản Phẩm Liên Quan -->
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
      $('.product__detail').slick({
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