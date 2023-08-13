<?php
session_start();
require_once('php/connection.php');
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web Cuoi Ky</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet'
        type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link type="text/css" href="css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm" style="background-color: #E57373;">
            <div class="container">
                <a class="navbar-brand" href="http://localhost/"><b>JobCV</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#job-new">Việc Làm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#popular-company">Công Ty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer-contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="taoCV()">Tạo CV</a>
                        </li> -->
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <a href="#" class="fas fa-user-circle" id="icon" onclick="manageCV()"></a>
                        <a id="hello-user">Hello
                            <?php echo $_SESSION['username'] ?>
                        </a>
                        <li><a class="app-nav__item" href="php/logout.php"><i class='bx bx-log-out bx-rotate-180'
                                    id="icon-nav"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Quản lý CV -->
        <div class="container mt-3 container-cv">
            <div class="row">
                <!-- <div class="col-sm-1"></div> -->
                <div class="col-sm-3"><a class="text-con-cv" href="user-manage-cv.php">
                        <p>Quản lý CV</p>
                    </a>
                </div>
                <div class="col-sm-3 ">
                    <a class="text-con-cv" href="job-applied.php">
                        <p>Việc đã ứng tuyển</p>
                    </a>
                </div>
                <div class="col-sm-3 ">
                    <a class="text-con-cv" href="bookmark.php">
                        <p>Bookmark</p>
                    </a>
                </div>
            </div>
            <hr>
            <h3 style="color: #E57373;">Việc đã ứng tuyển</h3>
            <br>
            <table class="table table-manage-cv">
                <thead>
                    <tr>
                        <th>Tên vị trí</th>
                        <th>Tên công ty</th>
                        <th>Ngày ứng tuyển</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = 'SELECT * FROM job_applied where username = ?';

                    try {
                        $stmt = $dbCon->prepare($query);
                        $stmt->execute(array($_SESSION['username']));

                    } catch (PDOException $ex) {
                        die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
                    }

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>
                            <td>'.$row['ten_vi_tri'].'</td>
                            <td>'.$row['ten_cong_ty'].'</td>
                            <td>'.$row['ngay_ung_tuyen'].'</td>
                            <td>'.$row['trang_thai'].'</td>
                        </tr>';
                    }

                    ?>
                </tbody>
            </table>
        </div>

        <!-- Footer -->
        <!-- <div class="footer mt-3" id="footer-contact">
            <div class="container text-footer">
                <b style="font-size: 30px;">JobCV</b>
                <p>Số 19, đường Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, Thành phố Hồ Chí Minh
                    <br>
                    Liên hệ: 0357766990 - contact@jobcv.vn
                    <br>
                    Copyright &copy; 2022 Tìm kiếm việc làm JobCV
                </p>
            </div>
        </div> -->
    </div>
</body>

</html>