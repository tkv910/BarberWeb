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
 <!-- Footer -->
 <footer>
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <h2 class="mb-3 text-color">QDB Barber</h2>
              <p>Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh thần mới mà người đàn ông luôn hướng đến để tìm thấy phiên bản tốt nhất của chính mình. Hãy cùng lắng nghe những câu chuyện hành trình lột xác dưới đây để tìm thấy niềm cảm hứng đổi mới cho bạn.</p>
              <div class="social-links">
                <a href="#" class="social__links"><i class="ri-facebook-fill"></i></a>
                <a href="#" class="social__links"><i class="ri-twitter-fill"></i></a>
                <a href="#" class="social__links"><i class="ri-instagram-fill"></i></a>
                <a href="#" class="social__links"><i class="ri-google-fill"></i></a>
              </div>   
            </div>
            <div class="col-lg-3 offset-lg-1">
              <h2 class="text-color">Working Hours</h2>
              <div>
                <h6>Monday - Saturday</h6>
                <p>09:am - 09:pm</p>          
              </div>
              <div>
                <h6>Sunday</h6>
                <p>We're Close</p>          
              </div>
            </div>
            <div class="col-lg-3">
              <a href=""><div class="product-slide">
              <h2 class="text-color">Contact</h2 class="text-color">
              <p>
                <i class="ri-map-pin-2-line"></i>
                <span>Bà Rịa Vũng Tàu</span>
              </p>
              <p>
                <i class="ri-phone-fill"></i>
                <span>(023) 562-3525</span>
                </a></div>
              </p>
              <p>
                <i class="ri-mail-line"></i>
                <span>QDBbarbero@gmail.com</span>
              </p>
            </div>
          </div>
          <hr>
          <div class="row">
              <div class="footer-bottom">
                <p>Copyright ©2020 30shine. All Right Reserved</p>
                <ul class="footer__bottom">
                    <a href=""><li class="footer__bottom">
                            Về QDB Barber
                    </li></a>
                    <a href=""><li class="footer__bottom">
                            Ưu đãi
                    </li></a>
                    <a href=""><li class="footer__bottom">
                            Dịch Vụ
                    </li></a>
                    <a href=""><li class="footer__bottom">
                            Shine Member
                    </li></a>
                </ul>
                </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer -->

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
  </body>
</html>