
<?php
include 'config.php';
$sql = "SELECT * FROM product" ;
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
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
<nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="logo" src="img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-lg-auto ms-md-12" id="navbarNav">
          <ul class="navbar-nav ms-lg-auto ms-md-auto ms-sm-auto ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php" >Trang Chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="hanhtrinhtoasang.php">Hành Trình Toả Sáng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="datlich.php">Đặt Lịch</a>
            </li>
            <li class="nav-item hidden">
              <a class="nav-link" aria-current="page" href="searchshop.php">Tìm Shop Gần Nhất</a>
            </li>
            <!-- List Menu -->
            <li class="nav-dropdown">TÌM HIỂU THÊM
              <ul class="nav__item">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="danhgia.php">Đánh Giá</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="product.php">BarBer Shop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="khamphakieutoc.php">Khám Phá Kiểu Tóc</a>
                </li>
                <li class="nav-item hidden">
                  <a class="nav-link" aria-current="page" href="searchshop.php">Tìm Shop Gần Nhất</a>
                </li>
              </ul>
            </li>
              <!-- List Menu -->
              <li class="nav-item ms-xs">
                <a class="nav-link" aria-current="page" href="login.php">Đăng Nhập</a>
              </li>

              <!-- Menu-dropdown -->
              <div class="menu">
                  <div class="menu__icon">
                    <i class="ri-menu-line"></i>
                  </div>
                 
              </div>
              
              <!-- Menu-dropdown -->
          </ul>
          <!-- <a href="#" class="btn btn-outline-brand ms-lg-3">Book Now</a> -->
        </div>
      </div>
    </nav>
  <!-- // NAVBAR -->
    
    <!-- HERO -->
      <section id="hero">
          <div class="container-fluid">
            <div id="carouselId" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <a href=""><img src="img/layer1.jpg" alt="First slide"></a>
                </div>
                <div class="carousel-item">
                  <a href=""><img src="img/layer2.jpg" alt="Second slide"></a>
                </div>
                <div class="carousel-item">
                  <a href=""><img src="img/layer3.jpg" alt="Third slide"></a>
                </div>
                <div class="carousel-item">
                  <a href=""><img src="img/layer4.jpg" alt="Four slide"></a>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

      </section>
    <!-- // HERO -->
<!-- CAM KET -->

<section id="surrance">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 surrance">
                <img src="img/anhmau/ah1.svg" alt="">
                <p>Giao hàng siêu tốc 2h</p>
            </div>
            <div class="col-lg-3 col-md-3 surrance">
                <img src="img/anhmau/ah2.svg" alt="">
                <p>Hoàn tiền 120%</p>
            </div>
            <div class="col-lg-3 col-md-3 surrance">
                <img src="img/anhmau/ah3.svg" alt="">
                <p>Đổi trả tận nơi</p>
            </div>
            <div class="col-lg-3 col-md-3 surrance">
                <img src="img/anhmau/ah4.svg" alt="">
                <p>Hiệu quả trong 7 ngày</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-2 col-md-2 center surrance-item">
                <img src="img/anhmau/hot.png" alt="">
                <p>Sản phẩm mới</p>
            </div>
            <div class="col-lg-2 col-md-2 surrance-item">
                <img src="img/anhmau/sale-shock.png" alt="">
                <p>Sale sốc deal hời</p>
            </div>
            <div class="col-lg-2 col-md-2 surrance-item">
                <img src="img/anhmau/doc-quyen.png" alt="">
                <p>Sản phẩm độc quyền</p>
            </div>
            <div class="col-lg-2 col-md-2 surrance-item">
                <img src="img/anhmau/het-mun.png" alt="">
                <p>Nhanh hết mụn</p>
            </div>
            <div class="col-lg-2 col-md-2 surrance-item">
                <img src="img/anhmau/skincare.png" alt="">
                <p>Chăm sóc da mặt</p>
            </div>
            <div class="col-lg-2 col-md-2 surrance-item">
                <img src="img/anhmau/toc-dep.png" alt="">
                <p>Muốn có tóc đẹp</p>
            </div>
        </div>
    </div>
   
</section>
<!-- CAM KET -->
<!-- PRODUCT NEWS -->
<section id="product-new">
    <div class="container">
        <div class="title-top">
            <div class="title">
                <h1 class="text-color">Sản Phẩm Mới Nhất</h1>
                <div class="title-line"></div>
            </div>
            <div class="search-product">
                <select name="search" id="">
                    <option value="Sắp Xếp Theo Giá">Sắp Xếp Theo Giá</option>
                    <option value="Sắp Xếp Theo Tên">Sắp Xếp Theo Tên</option>
                    <option value="Sắp Xếp Theo Đánh Giá">Sắp Xếp Theo Đánh Giá</option>
                    <option value="Sắp Xếp Theo Độ Phổ Biến">Sắp Xếp Theo Độ Phổ Biến</option>
                </select>
            </div>
        </div>
        <div class="row gy-5">
        <?php
            include 'config.php';
            $result=mysqli_query($conn, "SELECT * FROM `product` where product_type = 1");
            $row = mysqli_fetch_assoc($result);
            $totalRecords = mysqli_query($conn, "SELECT * FROM `product` where product_type = 1");
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
            $result = mysqli_query($conn, "SELECT * FROM product where product_type = 1 LIMIT $start, $limit");
            while ($row = mysqli_fetch_array($result)){
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
            //         if ($current_page > 1 && $total_page > 1){
            //     echo '<button style = "height:30px;width:30px; background-color:white; color:black;"><a  href= "product.php?page='.($current_page-1).'"><i class="fa fa-chevron-left"></i></a></button>';
            // }

            // if ($current_page < $total_page && $total_page > 1){
            //     echo '<button style = "height:30px;width:30px; background-color:white; color:black;font-weight: bolder;"><a href="product.php?page='.($current_page+1).'"><i class="fa fa-chevron-right"></i></a></button>';
            // }

            ?> 
                </div></a>
            </div>
            <?php } ?>
            <ul class="pagination">
            <?php for ($i = 1; $i <= $total_page; $i++){

                if ($i == $current_page){
                    echo '<li class="pag-item"><span >'.$i.'</span></li>';
                }
                else{
                    echo '<li class="pag-item"><a href = "product.php?page='.$i.'">'.$i.'</a></li>';
                }
            }?>
            </ul>
        </div>
    </div>
</section>
<!-- PRODUCT TRENDING -->
<section id="product-trend">
    <div class="container">
        <div class="title-top">
            <div class="title">
                <h1 class="text-color">Sản Phẩm Bán Chạy</h1>
                <div class="title-line"></div>
            </div>
            <div class="search-product">
                <select name="search" id="">
                    <option value="Sắp Xếp Theo Giá">Sắp Xếp Theo Giá</option>
                    <option value="Sắp Xếp Theo Tên">Sắp Xếp Theo Tên</option>
                    <option value="Sắp Xếp Theo Đánh Giá">Sắp Xếp Theo Đánh Giá</option>
                    <option value="Sắp Xếp Theo Độ Phổ Biến">Sắp Xếp Theo Độ Phổ Biến</option>
                </select>
            </div>
        </div>
        <div class="row gy-5">
        <?php
            include 'config.php';
            $result=mysqli_query($conn, "SELECT * FROM `product` where product_type = 2");
            $row = mysqli_fetch_assoc($result);
            $totalRecords = mysqli_query($conn, "SELECT * FROM `product` where product_type = 2");
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
            $result = mysqli_query($conn, "SELECT * FROM product where product_type = 2 LIMIT $start, $limit");
            while ($row = mysqli_fetch_array($result)){
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
                </div></a>
            </div>
            <?php } ?>
            <ul class="pagination">
            <?php for ($i = 1; $i <= $total_page; $i++){

                if ($i == $current_page){
                    echo '<li class="pag-item"><span >'.$i.'</span></li>';
                }
                else{
                    echo '<li class="pag-item"><a href = "product.php?page='.$i.'">'.$i.'</a></li>';
                }
            }?>
            </ul>
        </div>
    </div>
</section>
<!-- PRODUCT TRENDING -->
<!-- PRODUCT COMBO -->
<section id="product-combo">
    <div class="container">
        <div class="title-top">
            <div class="title">
                <h1 class="text-color">ComBo Siêu Tiết Kiệm</h1>
                <div class="title-line"></div>
            </div>
            <div class="search-product">
                <select name="search" id="">
                    <option value="Sắp Xếp Theo Giá">Sắp Xếp Theo Giá</option>
                    <option value="Sắp Xếp Theo Tên">Sắp Xếp Theo Tên</option>
                    <option value="Sắp Xếp Theo Đánh Giá">Sắp Xếp Theo Đánh Giá</option>
                    <option value="Sắp Xếp Theo Độ Phổ Biến">Sắp Xếp Theo Độ Phổ Biến</option>
                </select>
            </div>
        </div>
        <div class="row gy-5">
        <?php
            include 'config.php';
            $result=mysqli_query($conn, "SELECT * FROM `product` where product_type = 3");
            $row = mysqli_fetch_assoc($result);
            $totalRecords = mysqli_query($conn, "SELECT * FROM `product` where product_type = 3");
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
            $result = mysqli_query($conn, "SELECT * FROM product where product_type = 3 LIMIT $start, $limit");
            while ($row = mysqli_fetch_array($result)){
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
                </div></a>
            </div>
            <?php } ?>
            <ul class="pagination">
            <?php for ($i = 1; $i <= $total_page; $i++){

                if ($i == $current_page){
                    echo '<li class="pag-item"><span >'.$i.'</span></li>';
                }
                else{
                    echo '<li class="pag-item"><a href = "product.php?page='.$i.'">'.$i.'</a></li>';
                }
            }?>
            </ul>
        </div>
    </div>
</section>
<!-- PRODUCT COMBO -->
<!-- PRODUCT PERSONAL -->
<section id="product-personal">
<div class="container">
        <div class="title-top">
            <div class="title">
                <h1 class="text-color">Chăm Sóc Cá Nhân</h1>
                <div class="title-line"></div>
            </div>
            <div class="search-product">
                <select name="search" id="">
                    <option value="Sắp Xếp Theo Giá">Sắp Xếp Theo Giá</option>
                    <option value="Sắp Xếp Theo Tên">Sắp Xếp Theo Tên</option>
                    <option value="Sắp Xếp Theo Đánh Giá">Sắp Xếp Theo Đánh Giá</option>
                    <option value="Sắp Xếp Theo Độ Phổ Biến">Sắp Xếp Theo Độ Phổ Biến</option>
                </select>
            </div>
        </div>
        <div class="row gy-5">
        <?php
            include 'config.php';
            $result=mysqli_query($conn, "SELECT * FROM `product` where product_type = 4");
            $row = mysqli_fetch_assoc($result);
            $totalRecords = mysqli_query($conn, "SELECT * FROM `product` where product_type = 4");
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
            $result = mysqli_query($conn, "SELECT * FROM product where product_type = 4 LIMIT $start, $limit");
            while ($row = mysqli_fetch_array($result)){
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
                </div></a>
            </div>
            <?php } ?>
            <ul class="pagination">
            <?php for ($i = 1; $i <= $total_page; $i++){

                if ($i == $current_page){
                    echo '<li class="pag-item"><span >'.$i.'</span></li>';
                }
                else{
                    echo '<li class="pag-item"><a href = "product.php?page='.$i.'">'.$i.'</a></li>';
                }
            }?>
            </ul>
        </div>
    </div>
</section>
<!-- PRODUCT PERSONAL -->

<!-- THƯƠNG HIỆU -->
<section class="thuonghieu">
    <div class="container">
        <h2 class="text-color">THƯƠNG HIỆU NỔI BẬT</h2>
        <br>
        <div class="row">
            <div class="thuonghieu-item">
                <div class="col-lg-2 col-md-2 thuonghieu">
                    <img src="img/anhmau/th1.webp" alt="">
                </div>
                <div class="col-lg-2 col-md-2 thuonghieu">
                    <img src="img/anhmau/th2.webp" alt="">
                </div>
                <div class="col-lg-2 col-md-2 thuonghieu">
                    <img src="img/anhmau/th3.webp" alt="">
                </div>
                <div class="col-lg-2 col-md-2 thuonghieu">
                    <img src="img/anhmau/th4.webp" alt="">
                </div>
                <div class="col-lg-2 col-md-2 thuonghieu">
                    <img src="img/anhmau/th5.webp" alt="">
                </div>
                <div class="col-lg-2 col-md-2 thuonghieu">
                    <img src="img/anhmau/th6.webp" alt="">
                </div>
                <div class="col-lg-2 col-md-2 thuonghieu">
                    <img src="img/anhmau/th7.webp" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- THƯƠNG HIỆU -->

<!-- CAM KẾT -->
<section id="camket">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 camket">
                <img src="img/anhmau/usp-icon-1.png" alt="">
                <p>Cam kết 7 ngày hiệu quả</p>
            </div>
            <div class="col-lg-3 col-md-3 camket">
                <img src="img/anhmau/usp-icon-2.png" alt="">
                <p>Mua 1 hưởng 5 đặc quyền</p>
            </div>
            <div class="col-lg-3 col-md-3 camket">
                <img src="img/anhmau/usp-icon-3.png" alt="">
                <p>Chính sách hoàn tiền 120%</p>
            </div>
            <div class="col-lg-3 col-md-3 camket">
                <img src="img/anhmau/usp-icon-4.png" alt="">
                <p>Sản phẩm chất lượng cao</p>
            </div>
            <div class="col-lg-3 col-md-3 camket">
                <img src="img/anhmau/usp-icon-5.png" alt="">
                <p>Giao hàng siêu tốc 2h</p>
            </div>
            <div class="col-lg-3 col-md-3 camket">
                <img src="img/anhmau/usp-icon-6.png" alt="">
                <p>Đổi trả tận nơi trong 24h</p>
            </div>
            <div class="col-lg-3 col-md-3 camket">
                <img src="img/anhmau/usp-icon-7.png" alt="">
                <p>Tổng đài tư vấn mọi lúc mọi nơi</p>
            </div>
            <div class="col-lg-3 col-md-3 camket">
                <img src="img/anhmau/usp-icon-8.png" alt="">
                <p>An toàn chuẩn giao vận quốc tế</p>
            </div>
        </div>
    </div>
</section>
<!-- CAM KẾT -->

<!-- Booking -->
<section id="overlay fixed-top">
		
            </section>
<!-- Booking -->

<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $('.thuonghieu-item').slick({
slidesToShow: 6,
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