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
        // header('Location:'.'http://localhost/DATTCNPM/index.php');
 } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
		// header('Location:'.'http://localhost/DATTCNPM/index.php');
 }
}
//Đóng database
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
    <!-- INTRODUCTION -->
      <section id="intro">
        <div class="container">
          <h6>QDB Barber - Một dự án của nhóm bạn trẻ năng động, đam mê sáng tạo.</h6>
          <p>Hiện nay, nhu cầu làm đẹp của cả giới nam và giới nữ là vô cùng quan trọng. Nắm bắt được nhu cầu của hầu hết giới nam, QDB barber đã ra đời. 
            Với trang thiết bị hiện đại, và tay nghề cao của nhân viên cùng với sự tư vấn nhiệt tình của nhân viên. QDB barber hứa hẹn sẽ là một trong những salon hàng đầu
          về sắc đẹp giới nam... </p>
        </div>
      </section>
    <!-- INTRODUCTION -->

    <!-- TRENDING -->
      <section id="trending">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <h4>XU HƯỚNG TÓC <i>2022</i> DÀNH CHO NAM GIỚI</h4>
              </div>
              <div class="col-lg-6">
                <p>Theo dõi QDB barber để biết thêm các kiểu tóc mới thịnh hành và nổi bật trong năm 2022. Xem những video hướng dẫn bổ ích về chải chuốt và cách 
                  vuốt sáp sao cho có một mái tóc tuyệt vời nhé!
                </p>
              </div>
              <div class="col-lg-2">
                <a href="khamphakieutoc.php"><button>NỔI BẬT 2021</button></a>
              </div>
            </div>
            <div class="row gy-5">
              <div class="col-lg-4 col-md-6 trending-item">
                <a href="khamphakieutoc.php"><img src="img/team_member1.jpg" alt=""></a>
                <p class="item">gentlement hairstyles</p>
              </div>
              <div class="col-lg-4 col-md-6 trending-item">
                <a href="khamphakieutoc.php"><img src="img/team_member2.jpg" alt=""></a>
                <p class="item">streetstyle-hair color</p>
              </div>
              <div class="col-lg-4 col-md-6 trending-item">
                <a href="khamphakieutoc.php"><img src="img/team_member3.jpg" alt=""></a>
                <p class="item">hair care - bí quyết chăm sóc tóc</p>
              </div>
            </div>
              <!-- <div class="row">
                  <div class="col-lg-4">
                      <img  src=".img/about_img.png" alt="">
                  </div>
                  <div class="col-lg-5 offset-lg-1">
                      <h6>GIỚI THIỆU VỀ QDB SALON</h6>
                      <h2>Tìm Hiểu QDB Salon</h2>
                      <p>QDB Salon là một trong những hệ thống cắt tóc được ưa chuộng nhất hiện nay. Với ước mơ đưa con người Việt Nam trở nên đẹp trước mặt
                        bạn bè quốc tế. QDB Salon được thành lập bởi thành viên, TDB ở đây được đặt dựa trên tên của 4 thành viên. Ước muốn của họ là nhằm tạo nên vẻ ngoài cho phái mạnh ở Việt 
                      </p>
                      <img class="signature" src="img/signature.png" alt="">
                    </div>
                    
              </div> -->
          </div>
      </section>
    <!-- // TRENDING -->


    <!-- SERVICES -->

      <section id="services">
          <div class="container text-center">
              <div class="row">
                  <div class="col-12 intro">
                        <h1 class="text-color">Chúng Tôi Có Thể Giúp Bạn?</h1>
                        <p>Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh thần mới mà người đàn ông luôn hướng đến để tìm thấy phiên bản tốt nhất của chính mình. Hãy cùng lắng nghe những câu chuyện hành trình lột xác dưới đây để tìm thấy niềm cảm hứng đổi mới cho bạn.</p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/service_1.jpg" alt="">
                    <div class="content">
          
                        <h3 class="text-color">Cắt gội massage</h3>
                        <p>Đội ngũ tay nghề cao</p>
                        <a href="" class="link-more">Tìm Hiểu Thêm<i class="ri-arrow-right-line icon"></i></a>
                    </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/service_2.jpg" alt="">
                    <div class="content">
                            
                        <h3 class="text-color">Uốn nhập khẩu Hàn</h2>
                        <p>Bảng giá 2022 (hấp dẫn)</p>
                        <a href="" class="link-more">Tìm Hiểu Thêm<i class="ri-arrow-right-line icon"></i></a>
                    </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/service_3.jpg" alt="">
                    <div class="content">
                            
                        <h3 class="text-color">Cắt gội massage</h3>
                        <p>Bảng giá 2022 (hấp dẫn)</p>
                        <a href="" class="link-more">Tìm Hiểu Thêm<i class="ri-arrow-right-line icon"></i></a>
                    </div>
                    </div>
                  </div>

                  <div class="cta-btns">
                    <a href="" class="btn btn-brand me-sm-2">Appointment</a>
                    <a href="" class="btn btn-outline-brand me-sm-2">Get in touch</a>
                  </div>

                  
              </div>
          </div>
      </section>
    <!-- // SERVICES -->

    <!-- COUNTERS -->
      <section id="milestone">
          <div class="container text-center">
            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <h1>5468</h1>
                <p>Customer Served</p>
              </div>
              <div class="col-lg-3 col-sm-6">
                <h1>4356</h1>
                <p>Awards Won</p>
              </div>
              <div class="col-lg-3 col-sm-6">
                <h1>5635</h1>
                <p>Customer Served</p>
              </div>
              <div class="col-lg-3 col-sm-6">
                <h1>5468</h1>
                <p>Awards Won</p>
              </div>
            </div>
          </div>
      </section>
    <!-- COUNTERS -->

    <!-- PRODUCT -->
      <section id="product">
        <div class="container">
          <div class="row gy-5 ">
            <div class="product__top">
              <h1 class="text-color text-left">Sản Phẩm</h1 text-item>
              <a href="product.php"><button class="text-color">Tất cả sản phẩm</button></a>
            </div>
            <div class="product-bottom">
            <?php
                include 'config.php';
                $result=mysqli_query($conn, "SELECT * FROM `sanpham`");
                while ($row = mysqli_fetch_array($result)){
            ?>
              <div class="col-lg-3">
                <a href="product-details.php?id=<?= $row['id']?>"><div class="product-slide">
                  <img src="img/sanpham/<?php echo $row['product_img']; ?>" alt="">
                  <p class="descript"><a href="product-details.php?id=<?= $row['id']?>"><?= $row['product_name'] ?></p>
                  <ul class="price">
                    <li class="price-now"><?= number_format($row['product_cost'], 0, ",", ".") ?></li>
                    <li class="price-old"><del><?= number_format($row['product_oldcost'], 0, ",", ".") ?></del></li>
                  </ul>
                  <button class="buy">MUA NGAY <i class="ri-arrow-right-line"></i></button>
              </div>
              </a></div>
              <?php } ?>
          </div>
          
        </div>
      </section>
    <!-- PRODUCT -->

    <!-- FEATURES -->
    <section id="features">
      <div class="container">
          <div class="row">
              <div class="col-12 intro text-center">
                    <h1 class="text-color">Tại sao phải lựa chọn chúng tôi?</h1>
                    <p>QDB Barber tự hào là một trong những chuỗi làm đẹp cho phái nam được ưa chuộng và đánh giá cáo nhất hiện nay. Với sứ mệnh nâng tầm nhan sắc
                      việt. QDB barber đã và đang nâng cấp hệ thống của mình. Dưới đây là đánh giá và giới thiệu về hệ thống.</p>
              </div>
          </div>
          <div class="row gy-5">
              <div class="col-lg-4 col-sm-6">
                  <div class="feature">
                      <div class="icon-feature"><i class="ri-pen-nib-fill"></i></div>
                      <div>
                        <h3 class="h5">Trang Thiết Bị</h3>
                        <p>Với Chuỗi hệ thống cữa hàng trải dài trên mọi miền đất nước. QDB barber đang dần trở thành
                          nơi làm đẹp hàng đầu cho phái mạnh Việt
                        </p>
                        <a href="" class="link-more">Tìm Hiểu Thêm<i class="ri-arrow-right-line icon"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                  <div class="feature">
                      <div class="icon-feature"><i class="ri-scissors-fill"></i></div>
                      <div>
                        <h3 class="h5">Nhân Viên</h3>
                        <p>Với đội ngũ dày dặn kinh nghiệm trong lĩnh vực sắc đep. QDB barber luôn đem đến cho 
                          bạn một mái tóc phù hợp và tự tin hơn.
                        </p>
                        <a href="" class="link-more">Tìm Hiểu Thêm<i class="ri-arrow-right-line icon"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                  <div class="feature">
                      <div class="icon-feature"><i class="ri-store-fill"></i></div>
                      <div>
                        <h3 class="h5">Chuỗi Hệ Thống</h3>
                        <p>Với Chuỗi hệ thống cữa hàng trải dài trên mọi miền đất nước. QDB barber đang dần trở thành
                          nơi làm đẹp hàng đầu cho phái mạnh Việt</p>
                        <a href="" class="link-more">Tìm Hiểu Thêm<i class="ri-arrow-right-line icon"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                <div class="feature">
                    <div class="icon-feature"><i class="ri-fire-fill"></i></div>
                    <div>
                      <h3 class="h5">Phục Vụ</h3>
                      <p>Với đội ngũ nhân viên tư vấn dày dặn kinh nghiệm, vui vẽ và hoà đồng. QDB barber luôn luôn làm hài
                        lòng khách hàng mỗi khi đến sử dụng dịch vụ của mình.
                      </p>
                      <a href="" class="link-more">Tìm Hiểu Thêm<i class="ri-arrow-right-line icon"></i></a>
                    </div>
                </div>
            </div>
              <div class="col-lg-4 col-sm-6">
                  <div class="feature">
                      <div class="icon-feature"><i class="ri-heart-3-fill"></i></div>
                      <div>
                        <h3 class="h5">Sản Phẩm</h3>
                        <p>Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh thần mới mà người đàn ông luôn hướng</p>
                        <a href="" class="link-more">Tìm Hiểu Thêm<i class="ri-arrow-right-line icon"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                  <div class="feature">
                      <div class="icon-feature"><i class="ri-chat-1-fill"></i></div>
                      <div>
                        <h3 class="h5">Đánh Giá</h3>
                        <p>Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh thần mới mà người đàn ông luôn hướng</p>
                        <a href="" class="link-more">Tìm Hiểu Thêm<i class="ri-arrow-right-line icon"></i></a>
                      </div>
                  </div>
              </div>
              
              <div class="cta-btns text-center">
                <a href="" class="btn btn-brand me-sm-2">Appointment</a>
                <a href="" class="btn btn-outline-brand me-sm-2">Get in touch</a>
              </div>
          </div>
      </div>
    </section>
    <!-- // FEATURES -->
    
    <!-- TEAM -->
    <section id="team">
      <div class="container">
          <div class="row">
              <div class="col-12 intro text-center">
                    <h1 class="text-color">Gặp Đồng Nghiệp Của Tôi</h1>
                    <p>Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh thần mới mà người đàn ông luôn hướng đến để tìm thấy phiên bản tốt nhất của chính mình. Hãy cùng lắng nghe những câu chuyện hành trình lột xác dưới đây để tìm thấy niềm cảm hứng đổi mới cho bạn.</p>
              </div>
          </div>

          <div class="row gy-5 text-center">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="team-member">
                  <div class="img">
                    <img src="img/team_member1.jpg" alt="">
                  </div>
                  <h5>NGUYỄN BẢO</h5>
                  <p>Hair Cutter</p>
                  <div class="social-links">
                    <a href="#" class="social__links"><i class="ri-facebook-fill"></i></a>
                    <a href="#" class="social__links"><i class="ri-twitter-fill"></i></a>
                    <a href="#" class="social__links"><i class="ri-instagram-fill"></i></a>
                    <a href="#" class="social__links"><i class="ri-google-fill"></i></a>
                  </div> 
                  <button>Contact Me</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-member text-center">
                  <div class="img">
                    <img src="img/team_member2.jpg" alt="">
                  </div>
                  <h5>CHÁNH BẢO</h5>
                  <p>Hair Cutter</p>
                  <div class="social-links">
                    <a href="#" class="social__links"><i class="ri-facebook-fill"></i></a>
                    <a href="#" class="social__links"><i class="ri-twitter-fill"></i></a>
                    <a href="#" class="social__links"><i class="ri-instagram-fill"></i></a>
                    <a href="#" class="social__links"><i class="ri-google-fill"></i></a>
                  </div> 
                  <button>Contact Me</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-member">
                  <div class="img">
                    <img src="img/team_member3.jpg" alt="">
                  </div>
                  <h5>TRUNG QUỐC</h5>
                  <p>Hair Cutter</p>
                  <div class="social-links">
                    <a href="#" class="social__links"><i class="ri-facebook-fill"></i></a>
                    <a href="#" class="social__links"><i class="ri-twitter-fill"></i></a>
                    <a href="#" class="social__links"><i class="ri-instagram-fill"></i></a>
                    <a href="#" class="social__links"><i class="ri-google-fill"></i></a>
                  </div> 
                  <button>Contact Me</button>
                </div>
            </div>
            
           
          <div class="cta-btns text-center mt-5">
            <a href="" class="btn btn-brand me-sm-2">Appointment</a>
            <a href="" class="btn btn-outline-brand me-sm-2">Get in touch</a>
          </div>
      </div>
    </section>
    <!-- // TEAM -->


    <!-- TESTIMONIALS -->
    <section id="reviews">
      <div class="container">
          <div class="row">
              <div class="col-12 intro text-center">
                    <h1 class="text-color">Đánh giá về chúng tôi</h1>
                    <p>Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh thần mới mà người đàn ông luôn hướng đến để tìm thấy phiên bản tốt nhất của chính mình. Hãy cùng lắng nghe những câu chuyện hành trình lột xác dưới đây để tìm thấy niềm cảm hứng đổi mới cho bạn.</p>
              </div>
          </div>
          <div class="row  gy-5">
            <div class="col-lg-4 col-md-6">
              <div class="reviews">
                  <div class="d-flex">
                    <img src="img/avatar_01.jpg" alt="">
                    <div class="ms-3 mb-4">
                      <h5>Nguyễn Bảo</h5>
                      <small>@nguyenbao</small>
                    </div>
                    <div class="icon"><i class="ri-facebook-fill"></i></div>
                  </div>
                  <p class="mt-4">Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh thần mới mà người đàn ông luôn hướng đến để tìm thấy phiên bản tốt nhất của chính mình. Hãy cùng lắng nghe những câu chuyện hành trình lột xác dưới đây để tìm thấy niềm cảm hứng đổi mới cho bạn.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="reviews">
                  <div class="d-flex">
                    <img src="img/avatar_02.jpg" alt="">
                    <div class="ms-3 mb-4">
                      <h5>Nguyễn Bảo</h5>
                      <small>@nguyenbao</small>
                    </div>
                    <div class="icon"><i class="ri-facebook-fill"></i></div>
                  </div>
                  <p class="mt-4">Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh thần mới mà người đàn ông luôn hướng đến để tìm thấy phiên bản tốt nhất của chính mình. Hãy cùng lắng nghe những câu chuyện hành trình lột xác dưới đây để tìm thấy niềm cảm hứng đổi mới cho bạn.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="reviews">
                  <div class="d-flex">
                    <img src="img/avatar_03.jpg" alt="">
                    <div class="ms-3 mb-4">
                      <h5>Nguyễn Bảo</h5>
                      <small>@nguyenbao</small>
                    </div>
                    <div class="icon"><i class="ri-facebook-fill"></i></div>
                  </div>
                  <p class="mt-4">Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh thần mới mà người đàn ông luôn hướng đến để tìm thấy phiên bản tốt nhất của chính mình. Hãy cùng lắng nghe những câu chuyện hành trình lột xác dưới đây để tìm thấy niềm cảm hứng đổi mới cho bạn.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="reviews">
                  <div class="d-flex">
                    <img src="img/avatar_04.jpg" alt="">
                    <div class="ms-3 mb-4">
                      <h5>Nguyễn Bảo</h5>
                      <small>@nguyenbao</small>
                    </div>
                    <div class="icon"><i class="ri-facebook-fill"></i></div>
                  </div>
                  <p class="mt-4">Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh thần mới mà người đàn ông luôn hướng đến để tìm thấy phiên bản tốt nhất của chính mình. Hãy cùng lắng nghe những câu chuyện hành trình lột xác dưới đây để tìm thấy niềm cảm hứng đổi mới cho bạn.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="reviews">
                  <div class="d-flex">
                    <img src="img/avatar_05.jpg" alt="">
                    <div class="ms-3 mb-4">
                      <h5>Nguyễn Bảo</h5>
                      <small>@nguyenbao</small>
                    </div>
                    <div class="icon"><i class="ri-facebook-fill"></i></div>
                  </div>
                  <p class="mt-4">Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh thần mới mà người đàn ông luôn hướng đến để tìm thấy phiên bản tốt nhất của chính mình. Hãy cùng lắng nghe những câu chuyện hành trình lột xác dưới đây để tìm thấy niềm cảm hứng đổi mới cho bạn.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="reviews">
                  <div class="d-flex">
                    <img src="img/avatar_06.jpg" alt="">
                    <div class="ms-3 mb-4">
                      <h5>Nguyễn Bảo</h5>
                      <small>@nguyenbao</small>
                    </div>
                    <div class="icon"><i class="ri-facebook-fill"></i></div>
                  </div>
                  <p class="mt-4">Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh thần mới mà người đàn ông luôn hướng đến để tìm thấy phiên bản tốt nhất của chính mình. Hãy cùng lắng nghe những câu chuyện hành trình lột xác dưới đây để tìm thấy niềm cảm hứng đổi mới cho bạn.</p>
              </div>
            </div>
            <div class="cta-btns text-center">
              <a href="" class="btn btn-brand me-sm-2">Appointment</a>
              <a href="" class="btn btn-outline-brand me-sm-2">Get in touch</a>
            </div>  
          </div>
      </div>
    </section>
    <!-- // TESTIMONIALS -->

    <!-- BLOG -->
    <section id="blog">
      <div class="container">
          <div class="row">
              <div class="col-12 intro text-center">
                    <h1 class="text-color">Blog gần đây nhất</h1>
                    <p>Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh thần mới mà người đàn ông luôn hướng đến để tìm thấy phiên bản tốt nhất của chính mình. Hãy cùng lắng nghe những câu chuyện hành trình lột xác dưới đây để tìm thấy niềm cảm hứng đổi mới cho bạn.</p>
              </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="blog__item"><a href="">
              <article class="blog-post">
                <img src="img/blog_1.jpg" alt="">
                <div class="date">
                  <div>
                    <div class="day">12</div>
                    <div class="year">April, 2022</div>
                  </div>
                </div>
                <div class="social-links icon">
                  <a href="#" class="social__links"><i class="ri-heart-3-fill"></i></a>
                  <a href="#" class="social__links"><i class="ri-eye-fill"></i></a>
                  <a href="#" class="social__links"><i class="ri-chat-1-fill"></i></a>
                  <a href="#" class="social__links"><i class="ri-share-forward-fill"></i></a>
                </div> 
                <h4 class="mt-5">Quá trình tìm kiếm và hoàn thiện bản thân là bất tận.</h4>
                <p class="my-3">Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh</p>
                <a href="" class="link-more">Tìm Hiểu Thêm<i class="ri-arrow-right-line icon"></i></a>
              </article>
              </a></div>
            </div>
            <div class="col-lg-6 col-md-6">
            <div class="blog__item"><a href="">
              <article class="blog-post">
                <img src="img/blog_2.jpg" alt="">
                <div class="date">
                  <div>
                    <div class="day">12</div>
                    <div class="year">April, 2022</div>
                  </div>
                </div>
                <div class="social-links icon">
                  <a href="#" class="social__links"><i class="ri-heart-3-fill"></i></a>
                  <a href="#" class="social__links"><i class="ri-eye-fill"></i></a>
                  <a href="#" class="social__links"><i class="ri-chat-1-fill"></i></a>
                  <a href="#" class="social__links"><i class="ri-share-forward-fill"></i></a>
                </div>
                <h4 class="mt-5">Quá trình tìm kiếm và hoàn thiện bản thân là bất tận.</h4>
                <p class="my-3">Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh</p>
                <a href="" class="link-more">Tìm Hiểu Thêm<i class="ri-arrow-right-line icon"></i></a>
              </article>
              </a></div>
            </div>
            <div class="cta-btns text-center mt-5">
              <a href="" class="btn btn-brand me-sm-2">Appointment</a>
              <a href="" class="btn btn-outline-brand me-sm-2">Get in touch</a>
            </div>
          </div>
          
      </div>
    </section>
    <!-- // BLOG -->


    <!-- BOOKING -->
    <section id="booking">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
              <form action="" method="POST" class="row">
                <div class="col-12 mb-4">
                  <h1 class="text-color">Booking Now</h1>
                  <p>Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh thần mới mà người đàn ông luôn hướng đến để tìm thấy phiên bản tốt nhất của chính mình. Hãy cùng lắng nghe những câu chuyện</p>
                </div>
                <div class="form-group col-12">
                  <input type="text" name="name" class="form-control" placeholder="Full Name">
                </div>  
                <div class="form-group col-12">
                  <input type="text" name="phone" require= "" class="form-control" placeholder="Phone Number">
                </div>  
                <div class="row gy-2">
                  <input class="col-5" type="text" name="ngay" class="form-control" placeholder="DD/MM/YYYY">
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
                <div class="row gy-2">
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
                <div class="row gy-2">
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
                <div class="form-group col-12">
                  <textarea name="note" class="form-control" id="" cols="30" rows="5" placeholder="Message"></textarea>
                </div>  
                <div class="form-group col-12 mt-4">
                  <button type="submit" name="datlich" class="btn btn-brand">Đặt Lịch</button>
                </div>  
              </form>
          </div>
        </div>
      </div>
  </section>
    <!-- // BOOKING -->

    <!-- TÌM KIẾM VỊ TRÍ -->
    <section id="search-address">
      <div class="container">
        <div class="row search__addr">
          <ul class="search__addr-top">
              <li class="search__addr-top">
                <h3>Tìm Shop Gần Nhất</h3>
                <p>Để xe thuận tiện an toàn, bản đồ dẫn đường chi tiết(20 salon)</p>
              </li>
              <li class="search__addr-top">
                <a href=""><button><p>Xem tất cả <i class="ri-arrow-right-s-line"></i></p></button></a>
              </li>
          </ul>
          
          <div class="col-lg-4 addr">
            <img src="img/salon-hcm.png" alt="">
            <ul class="search-addr">
              <li class="search-addr">
                <h6>TP.Hồ Chí Minh</h6>
              </li>
              <li class="search-addr">
                <p>3 Salon</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-4 addr">
            <img src="img/salon-hanoi.png" alt="">
            <ul class="search-addr">
              <li class="search-addr">
                <h6>Hà Nội</h6>
              </li>
              <li class="search-addr">
                <p>3 Salon</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-4 addr">
            <img src="img/salon-danang.png" alt="">
            <ul class="search-addr">
              <li class="search-addr">
                <h6>Thành Phố Khác</h6>
              </li>
              <li class="search-addr">
                <p>3 Salon</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- TÌM KIẾM VỊ TRÍ -->
  </body>
</html>


<?php
  include "footer.php"
?>


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