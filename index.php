<?php
require_once('user/php/connection.php');
session_start();
if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web Cuoi Ky</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet'
        type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link type="text/css" href="user/css/style.css" rel="stylesheet">

    <!-- link css neww -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <?php
    function checkLogin()
    {
        if (!$_SESSION['login']) {
            echo '<script type ="text/javascript">
                alert("Vui lòng đăng nhập để sử dụng chức năng này");
                window.location.href = "http://localhost/";
                </script>';
        } else {
            header('location:user/taoCV.php');
        }
    }

    if (isset($_GET['taoCV'])) {
        checkLogin();
    }
    ?>
    <nav class="navbar navbar-expand-sm nav-1">
        <div class="container">
            <a class="navbar-brand" href="index.php"><b>JobCV</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#job-new">Việc Làm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#popular-company">Công Ty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer-contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?taoCV=true" onclick="checkLogin()">Tạo CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="company/company.php">Đăng tin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/admin.php">Admin</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if ($_SESSION['login']) {
                        echo '<a href="user/user-manage-cv.php" class="fas fa-user-circle" id="icon"></a>';
                        echo '<a id="hello-user">Hello' . $_SESSION['username'] . '</a>';
                        echo '<li><a class="app-nav__item" href="user/php/logout.php"><i class="bx bx-log-out bx-rotate-180" id="icon-nav"></i></a>
                        </li>';
                    } else {
                        echo '<div>
                            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#modal1"
                                style="text-decoration:none;color: #ffffff">Đăng nhập</button>
                            <span style="color: #ffffff">|</span>
                            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#modal2"
                                style="text-decoration:none;color: #ffffff">Đăng
                                ký</button>
                        </div>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!--Search-->
    <div class="container mt-3">
        <form class="d-flex" method="post" action="php/search.php">
            <input class="form-control me-2" name="search" id="text-search" type="text" placeholder="Tìm Kiếm Việc Làm">
            <div class="fgroup group1">
                <select class="select-style" name="place" id="select-place"
                    style="margin-right: 8px; width: 250px; height: 40px;">
                    <option value="">Chọn thành phố</option>
                    <option value="TP HCM">TP HCM</option>
                    <option value="Hà Nội">Hà Nội</option>
                    <option value="Đà Nẵng">Đà Nẵng</option>
                    <option value="Quy Nhơn">Quy Nhơn</option>
                </select>
            </div>
            <button class="btn" id="btn-search" name='find' type="submit" style="width: 150px;">Tìm
                Kiếm</button>
        </form>
    </div>

    <div class="content">
        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-6 mt-2">
                    <!-- Carousel -->
                    <div id="demo" class="carousel slide" data-bs-ride="carousel">

                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="user/images/banner1.jpg" alt="" class="d-block"
                                    style="height: 405px; width: 100%;">
                                <div class="carousel-caption">
                                    <h3>Cơ Hội Tìm Kiếm Việc Làm</h3>
                                    <p>Với nhiều loại công việc khác nhau!</p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="user/images/banner2.jpg" alt="" class="d-block"
                                    style="height: 405px; width:100%;">
                                <div class="carousel-caption">
                                    <h3>Công Ty</h3>
                                    <p>Được làm việc với những công ty hàng đầu</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="user/images/banner3.jpg" alt="" class="d-block"
                                    style="height: 405px; width: 100%;">
                                <div class="carousel-caption">
                                    <h3>Môi Trường Làm Việc</h3>
                                    <p>Linh hoạt và năng động.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>

                <div class="col-sm-2 mt-2">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <img src="user/images/bn1.png" alt="" style="width: 95%;">
                        </li>
                        <li class="list-group-item">
                            <img src="user/images/bn2.jpg" alt="" style=" width: 95%;">
                        </li>
                        <li class="list-group-item">
                            <img src="user/images/bn3.png" alt="" style=" width: 95%;">
                        </li>
                    </ul>
                </div>

                <!--Job Hot-->
                <div class="col-sm-4">
                    <h3>Công Việc Hot Hôm Nay</h3>
                    <ul class="list-group">
                        <li class="list-group-item" style="height: 120px;">
                            <h6>Taggle Pte. Ltd.</h6>
                            <p><b>Senior Unity3d Developer</b></p>
                            <p><i class="salary">30.000.000 VND to 40.000.000 VND</i>
                                <!-- <a href="#" class="see-more"
                                    style="padding-left: 40px; ">See More</a></p> -->
                        </li>
                        <li class="list-group-item" style="height: 130px;">
                            <h6>WebLife</h6>
                            <p><b>Mid/Senior Back-end Dev (NodeJS/ PHP) - 13th month salary bonus onboard before Tet</b>
                            </p>
                            <p><i class="salary">1.000 USD to 2.000 USD</i>
                                <!-- <a href="#" class="see-more"
                                    style="padding-left: 120px;">See More</a></p> -->
                        </li>
                        <li class="list-group-item" style="height: 120px;">
                            <h6>Ninja Van Tech Lab VN</h6>
                            <p><b>Senior UX Designer</b></p>
                            <p><i class="salary">Negotiable</i>
                                <!-- <a href="#" class="see-more"
                                    style="padding-left: 210px;">See More</a></p> -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--Doanh nghiệp nổi bậc-->
        <div class="container mt-3">
            <div class="row bg-dn">
                <h2 class="mb-3">Doanh Nghiệp Nổi Bật</h2>
                <div class="col-sm-3 mb-3">
                    <a href="#"><img src="user/images/ntd2.jpg" alt=""></a>
                    <b class="name-dn mt-2"><a href="#">LAIDON GROUP</a></b>
                </div>
                <div class="col-sm-3 mb-3">
                    <a href="#"><img src="user/images/ntd3.jpg" alt=""></a>
                    <b class="name-dn mt-2"><a href="#">NEC VIETNAM</a></b>
                </div>
                <div class="col-sm-3 mb-3">
                    <a href="#"><img src="user/images/ntd4.jpg" alt=""></a>
                    <b class="name-dn mt-2"><a href="#">NGÂN HÀNG Á
                            CHÂU</a></b>
                </div>
                <div class="col-sm-3 mb-3">
                    <a href="#"><img src="user/images/ntd5.jpg" alt=""></a>
                    <b class="name-dn mt-2"><a href="#">MGM TECHNOLOGY</a></b>
                </div>
            </div>
        </div>

        <!--Popular Company-->
        <div class="container mt-3" id="popular-company">
            <div class="row">
                <h4>Popular Company</h4>
                <?php

                $query = 'SELECT * FROM company';

                try {
                    $stmt = $dbCon->prepare($query);
                    $stmt->execute();

                } catch (PDOException $ex) {
                    die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
                }

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="col-sm-3 mt-3">
                        <div class="card" style="height: 400px">
                            <img class="card-img-top" src="user/' . $row['img_comp'] . '" alt="Card image">
                            <div class="card-body c-body1">
                                <h5 class="card-title cpn-title">' . $row['name_comp'] . '</h5>
                                <p class="name-place mb-4" style="height:60px">' . $row['address_comp'] . '</p> 
                                <a href="user/info-job.php?id=' . $row['ID_comp'] . '" class="btn btn-color">See More</a>
                            </div>
                        </div>
                    </div>';
                }



                ?>
                <!-- <div class="col-sm-3 mt-3">
                <div class="card">
                    <img class="card-img-top" src="user/images/company/cpn1.png" alt="Card image">
                    <div class="card-body c-body1">
                        <h5 class="card-title cpn-title">Korean IT Company</h5>
                        <p class="card-text salary">Salary: Negotiable</p>
                        <p class="name-place">Hồ Chí Minh, Hà Nội</p>
                        <a href="#" class="btn btn-color">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-3">
                <div class="card">
                    <img class="card-img-top" src="user/images/company/cpn2.png" alt="Card image"
                        style="width:100%; padding:20% ">
                    <div class="card-body c-body1">
                        <h5 class="card-title cpn-title">Senior QA Engineer</h5>
                        <p class="card-text salary">Salary: Negotiable </p>
                        <p class="name-place">Quận Đống Đa, Hà Nội</p>
                        <a href="#" class="btn btn-color">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-3">
                <div class="card">
                    <img class="card-img-top" src="user/images/company/cpn3.png" alt="Card image"
                        style="width:100%; padding:20% ">
                    <div class="card-body c-body1">
                        <h5 class="card-title cpn-title">Java Software Engineer</h5>
                        <p class="card-text salary">Salary: Negotiable</p>
                        <p class="name-place">Quận 1, TP HCM</p>
                        <a href="#" class="btn btn-color">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-3">
                <div class="card">
                    <img class="card-img-top" src="user/images/company/cpn4.png" alt="Card image" style="width:100%">
                    <div class="card-body c-body1">
                        <h5 class="card-title cpn-title">BOS DEVELOPER</h5>
                        <p class="card-text  salary">Salary: Up to 3.500 USD</p>
                        <p class="name-place">Quận Bình Thạnh, TP HCM</p>
                        <a href="info-job.php" class="btn btn-color">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-3">
                <div class="card">
                    <img class="card-img-top" src="user/images/company/cpn5.png" alt="Card image" style="width:100%">
                    <div class="card-body c-body1">
                        <h5 class="card-title cpn-title">Senior Database</h5>
                        <p class="card-text salary">Salary: Negotiable</p>
                        <p class="name-place">Quận 12, TP.HCM</p>
                        <a href="#" class="btn btn-color">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-3">
                <div class="card">
                    <img class="card-img-top" src="user/images/company/cpn6.png" alt="Card image" style="width:100%">
                    <div class="card-body c-body1">
                        <h5 class="card-title cpn-title">FullStack Developer</h5>
                        <p class="card-text salary">Salary: Negotiable</p>
                        <p class="name-place">Quận Tân Bình, TP HCM</p>
                        <a href="#" class="btn btn-color">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-3">
                <div class="card">
                    <img class="card-img-top" src="user/images/company/cpn7.png" alt="Card image" style="width:100%">
                    <div class="card-body c-body1">
                        <h5 class="card-title cpn-title">Software Engineer (Java)</h5>
                        <p class="card-text salary">Salary: 15.000.000 VNĐ</p>
                        <p class="name-place">Quận 1, TP HCM</p>
                        <a href="#" class="btn btn-color">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-3">
                <div class="card">
                    <img class="card-img-top" src="user/images/company/cpn8.png" alt="Card image" style="width:100%">
                    <div class="card-body c-body1">
                        <h5 class="card-title cpn-title">BOS DEVELOPER</h5>
                        <p class="card-text salary">Salary: Up to 3.500 USD</p>
                        <p class="name-place">Quận Bình Thạnh, TP HCM</p>
                        <a href="#" class="btn btn-color">See More</a>
                    </div>
                </div>
            </div> -->
            </div>
        </div>

        <!--Job New-->
        <div class="container mt-3" id="job-new">
            <div class="row">
                <div class="col-sm bg-job">
                    <div class="container">
                        <h4 class="mt-2">Công Việc Mới</h4>
                        <div class="row">
                            <div class="col-sm-4 mt-2 mb-2">
                                <div class="card">
                                    <div class="card-body" style="margin-bottom: -20px;">
                                        <h6 class="card-title"> <a class="text-job" href="">Software Engineer
                                                (Java)</a> <span><a href="" class=" icon-heart fas fa-heart"></a></span>
                                        </h6>
                                        <p class="card-text"><b><a class="text-job" href="">Company:
                                                    Techcombank</a></b></p>
                                        <p class="salary"><i>Salary: 15.000.000 VND</i></p>
                                        <p>Quận Hai Bà Trưng, TP Hà Nội</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-2 mb-2">
                                <div class="card">
                                    <div class="card-body" style="margin-bottom: -20px;">
                                        <h6 class="card-title"> <a href="" class="text-job">Senior Unity3d
                                                Developer</a> <span><a href=""
                                                    class="icon-heart fas fa-heart"></a></span>
                                        </h6>
                                        <p class="card-text"><b><a href="" class="text-job">Company: Taggle Pte.
                                                    Ltd.</a></b></p>
                                        <p class="salary"><i>Salary: 40.000.000 VND</i></p>
                                        <p>Quận Tân Bình, TP HCM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-2 mb-2">
                                <div class="card">
                                    <div class="card-body" style="margin-bottom: -20px;">
                                        <h6 class="card-title"> <a href="" class="text-job">SeniorSenior UX
                                                Designer</a> <span><a href=""
                                                    class=" icon-heart fas fa-heart"></a></span>
                                        </h6>
                                        <p class="card-text"><b><a href="" class="text-job">Company: Ninja Van Tech
                                                    Lab VN</a></b></p>
                                        <p class="salary"><i>Salary: Negotiable</i></p>
                                        <p>Quận Tân Bình, TP HCM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-2 mb-2">
                                <div class="card">
                                    <div class="card-body" style="margin-bottom: -20px;">
                                        <h6 class="card-title"><a href="" class="text-job">FullStack Developer</a>
                                            <span><a href="" class=" icon-heart fas fa-heart"></a></span>
                                        </h6>
                                        <p class="card-text"><b><a href="" class="text-job">Company:
                                                    Techcombank</a></b></p>
                                        <p class="salary"><i>Salary: 15.000.000 VND</i></p>
                                        <p>Quận Hai Bà Trưng, TP Hà Nội</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer mt-3" id="footer-contact">
            <div class="container text-footer">
                <b style="font-size: 30px;">JobCV</b>
                <p>Số 19, đường Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, Thành phố Hồ Chí Minh
                    <br>
                    Liên hệ: 0357766990 - contact@jobcv.vn
                    <br>
                    Copyright &copy; 2022 Tìm kiếm việc làm JobCV
                </p>
            </div>
        </div>

        <!-- Modal 1 -->
        <div class="modal fade" id="modal1" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form">
                            <form class="login-form" action="user/php/login.php" method="post">
                                <p style="text-align:center; font-weight:bold; font-size:20px;"> ĐĂNG NHẬP </p> </br>
                                <input type="email" name="username" placeholder="Nhập tài khoản email" /> </br>
                                <input type="password" name="password" placeholder="Nhập mật khẩu" />
                                <p class="message text-end"><a href="#forgot-password-form">Quên mật khẩu ?</a></p>
                                </br>
                                <button id="login" type="submit" name="login" value="">Đăng nhập</button>
                            </form>
                            <form class="forgot-password-form" method="post" action="php/login.php">
                                <p style="text-align:center; font-weight:bold;"> QUÊN MẬT KHẨU </p>
                                <input type="email" name="" placeholder="Nhập tài khoản email" />
                                <p class="message text-end">Đã nhớ tài khoản ? <a href="#login-form">Đăng nhập</a></p>
                                </br>
                                <button id="forgot-pwd" type="submit" name="forgot-pwd" value="">Gửi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div class="modal fade" id="modal2" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form">
                            <form method="post" action="user/php/add-user.php" class="register-form">
                                <p style="text-align:center; font-weight:bold;"> ĐĂNG KÝ </p> </br>
                                <input type="text" name="name" placeholder="Nhập tên họ và tên của bạn" /> </br>
                                <input type="text" name="gender"
                                    placeholder="Nhập giới tính(Chỉ điền Nam, Nữ hoặc khác)" />
                                </br>
                                <input type="text" name="phone" placeholder="Nhập số điện thoại" /> </br>
                                <input type="text" name="address" placeholder="Nhập địa chỉ hiện tại" /> </br>
                                <input type="date" name="dob" placeholder="Nhập ngày sinh" /> </br>
                                <input type="email" name="email" placeholder="Nhập địa chỉ email" /> </br>
                                <input type="password" name="pwd"
                                    placeholder="Nhập mật khẩu (Mật khẩu phải lớn hơn 6 ký tự)" /> </br>
                                <input type="password" name="confirm-pwd" placeholder="Xác nhận mật khẩu" /> </br>
                                <button id="btnRegis" type="submit" name="regis" value="">Đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>