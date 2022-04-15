<?php
  include "header.php"
?>
<?php
    include 'config.php';
    $sql = "SELECT * FROM `video_gioithieu`" ;
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
    <section id="hanhtrinhtoasang">
        <div class="container">
            <div class="row gy-4 gx-5">
                <h3 class="text-title text-center">HÀNH TRÌNH TOẢ SÁNG</h3>
                <p>Quá trình tìm kiếm và hoàn thiện bản thân là bất tận. Mỗi kiểu tóc mới đại diện một tinh thần mới mà người đàn ông luôn hướng đến để tìm thấy phiên bản tốt nhất của chính mình. Hãy cùng lắng nghe những câu chuyện hành trình lột xác dưới đây để tìm thấy niềm cảm hứng đổi mới cho bạn.</p>
                <?php
                include 'config.php';
                $result=mysqli_query($conn, "SELECT * FROM `video_gioithieu` where show_width = '2'");
                while ($row = mysqli_fetch_array($result)){
              ?>
                <div class="col-lg-6 col-md-6 hanhtrinhtoasang">
                  <div class="htts"><a href="<?php echo $row['link_video']; ?>">
                  <img src="img/htts/<?php echo $row['img']; ?>" alt="">
                   <h6 class="text-title"><?php echo $row['title']; ?></h6>
                    <p><?php echo $row['content']; ?></p>
                    <div class="social-links">
                      <a href="#" class="social__links"><i class="ri-heart-fill"></i></a>
                      <a href="#" class="social__links"><i class="ri-eye-fill"></i></a>
                  </div></a> 
                  </div>
              </div>
              <?php } ?> 
              <?php
                include 'config.php';
                $result=mysqli_query($conn, "SELECT * FROM `video_gioithieu` where show_width = '3'");
                while ($row = mysqli_fetch_array($result)){
              ?>
                <div class="col-lg-4 col-md-4 hanhtrinhtoasang">
                  <div class="htts"><a href="<?php echo $row['link_video']; ?>">
                   <img src="img/htts/<?php echo $row['img']; ?>" alt="">
                   <h6 class="text-title"><?php echo $row['title']; ?></h6>
                    <p><?php echo $row['content']; ?></p>
                    <div class="social-links">
                      <a href="#" class="social__links"><i class="ri-heart-fill"></i></a>
                      <a href="#" class="social__links"><i class="ri-eye-fill"></i></a>
                  </div></a> 
                </div></a></div>
                <?php } ?> 
            </div>
        </div>
    </section>
  </body>
</html>
<?php
  include "footer.php"
?>