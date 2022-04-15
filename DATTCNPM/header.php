<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location:account.php");
}
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
     <!-- NAVBAR -->
     
     <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img class="logo" src="img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-lg-auto ms-md-12" id="navbarNav">
          <ul class="navbar-nav ms-lg-auto ms-md-auto ms-sm-auto ms-auto Menu-Items">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php" >Trang Chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="hanhtrinhtoasang.php">Hành Trình Toả Sáng</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php#booking">Đặt Lịch</a>
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
                <a class="nav-link" aria-current="page" href="logout.php">Đăng Xuất</a>
              </li>

              <!-- Menu-dropdown -->
              <div class="menu">
                  <div class="menu__icon">
                    <i class="ri-menu-line" onclick="menutoggle()">
                    </i>
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
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $('.product-bottom').slick({
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
   <script>
        var navbar = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px";
                }
            else
                {
                    MenuItems.style.maxHeight = "0px";
                }
               
}
    </script>
  </body>
</html>