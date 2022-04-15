
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="admin.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>ADMIN</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fa fa-cogs me-2"></i>admin</div>
            <div class="list-group list-group-flush my-3">
            <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text "><i
                        class="fas fa-shopping-bag me-2"></i>Trang chủ</a>
                <a href="quanlysanpham.php" class="list-group-item list-group-item-action bg-transparent second-text"><i
                        class="fas fa-shopping-bag me-2"></i>Sản phẩm</a>
                <a href="quanlylichhen.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Lịch Hẹn</a>
                <a href="quanlychinhanh.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
                        class="fas fa-project-diagram me-2"></i>Chi Nhánh</a>
                <a href="quanlyuser.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-users me-2"></i>Khách hàng</a>
                <a href="quanlynhanvien.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-users me-2"></i>Nhân Viên</a>
                <a href="quanlycalam.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active"><i
                        class="fas fa-users me-2"></i>Ca Làm Việc</a>
                <a href="quanlymautoc.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-users me-2"></i>Kiểu Tóc</a>
                <a href="quanlydonhang.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-users me-2"></i>Đơn Hàng</a>
                <a href="quanlybaocao.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Báo cáo</a>
                <a href="quanlydoanhthu.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Doanh thu</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Đăng xuất</a>
            </div>
        </div>
        <!-- /#sidebar-End -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Quản Lý Ca Làm</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>QNguyen
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Hồ sơ</a></li>
                                <li><a class="dropdown-item" href="#">Cài đặt</a></li>
                                <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Lịch Hẹn </p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">4920</h3>
                                <p class="fs-5">Doanh số</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">3899</h3>
                                <p class="fs-5">Vận chuyển</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">%25</h3>
                                <p class="fs-5">Tăng trưởng</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div    class="row my-5">
                    <ul class="quanly">
                    <li><a href="themkhachhang.php" class="btn__add" style="padding: 15px 50px; background-color: #f18a1c; border-radius: 4px; text-align: center;padding-top: 8px; color: #fff; font-size: 18px; font-weight: 600;">
                            Thêm mới
                        </a></li>
                        <li><form method="POST" class="d-flex" action="">
                            <input name="search" type="search" class="form-control" style="border-color: #000;height: 40px; width: 300px; position: relative;">
                            <button name="sbm" class="btn btn-success" style=" border-color: #f18a1c; border: unset; margin-top: 0px; padding: 8px 10px;">Tìm kiếm</button>
                        </form>
                    </li>
                    </ul>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Mã Nhân Viên</th>
                                    <th scope="col">Chi Nhánh</th>
                                    <th scope="col">Chức Vụ</th>
                                    <th scope="col">Ca Làm</th>
                                    <th scope="col">Ngày</th>
                                    <th scope="col">Chức Năng</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                include '../config.php';
                                $result=mysqli_query($conn, "SELECT * FROM `calam`");
                                $row = mysqli_fetch_assoc($result);
                                $totalRecords = mysqli_query($conn, "SELECT * FROM `calam`");
                                $totalRecords = $totalRecords->num_rows;
                                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                                $limit = 6;


                                $total_page = ceil($totalRecords / $limit);

                                if ($current_page > $total_page){
                                    $current_page = $total_page;
                                }
                                else if ($current_page < 1){
                                    $current_page = 1;
                                }
                                $i = 1;
                                $start = ($current_page - 1) * $limit;
                                $result = mysqli_query($conn, "SELECT * FROM `calam` LIMIT $start, $limit");
                                while ($row = mysqli_fetch_array($result)){
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $i++ ?></th>
                                    <td><?php echo $row['manv']?></td>
                                    <td><?php echo $row['chinhanh']?></td>
                                    <td></td>
                                    <td><?php echo $row['calam']?></td>
                                    <td><?php echo $row['ngaylam']?></td>
                                    <td>
                                        <a class="btn btn-warning" style=" line-height: 40px; padding: 0px 20px; background-color:#ffc107; border-radius: 3px" href="suanhanvien.php?id=<?php echo $row['id']?>">Sửa</a>
                                        <a class="btn btn-danger" style="line-height: 40px; padding: 0px 20px; background-color:#dc3545; border-radius: 0.25rem;" href="xoanhanvien.php?id=<?php echo $row['id']?>">Xóa</a>
                                    </td>  
                                </tr>
                            <?php }?>
                            </tbody>
                                </table>
                <ul class="pagination">
                <?php for ($i = 1; $i <= $total_page; $i++){

                    if ($i == $current_page){
                        echo '<li class="pag-item"><span >'.$i.'</span></li>';
                    }
                    else{
                        echo '<li class="pag-item"><a href = "quanlyuser.php?page='.$i.'">'.$i.'</a></li>';
                    }
                    }?>
                    </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-End -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>