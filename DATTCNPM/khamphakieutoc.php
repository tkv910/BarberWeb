<?php 
    include "header.php"
?>
<?php
    include 'config.php';
    $sql = "SELECT * FROM `mautoc`" ;
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css"> 
    <title>hair salon</title>
</head>
<body id="home" data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- MENU -->
    <section id="menu ">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-12 col-md-12 menu-list text-center">
                    <a href="khamphakieutoc.php"><div class="menu-item active">Discover</div></a>
                    <a href=""><div class="menu-item">Style Master</div></a>
                    <a href="lookbook.php"><div class="menu-item">Lookbook</div></a>
                </div>
                <p class="text-center menu-title">CÙNG QDB BARBER KHÁM PHÁ
                    <br><b>XU HƯỚNG TÓC MỚI</b>
                </p>
            </div>
        </div>      
    </section>
    <section id="khamphakieutoc">
        <div class="container">
            <div class="row gy-4 gx-4">
            <?php
                include 'config.php';
                $result=mysqli_query($conn, "SELECT * FROM `mautoc`");
                while ($row = mysqli_fetch_array($result)){
            ?>
                <div class="col-lg-3 col-md-4 khamphakieutoc">
                <div class="kieutoc"><a href="<?php echo $row['link_content']?>">
                  <img src="img/kieutoc/<?php echo $row['img']; ?>" alt="">
                    <p><?php echo $row['title']; ?></p>
                    <div class="social-links">
                      <a href="#" class="social__links"><i class="ri-heart-fill"></i></a>
                      <a href="#" class="social__links"><i class="ri-eye-fill"></i></a>
                    </div>
                </a></div>
                </div> 
                <?php } ?>
            </div>
        </div>
    </section>
  </body>
</html>
<?php
  include "footer.php"
?>