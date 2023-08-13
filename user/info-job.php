<?php
session_start();
require_once('php/connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
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
    <!-- css -->
    <link type="text/css" href="css/style.css" rel="stylesheet">

    <!-- link icon css neww -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm nav-1">
        <div class="container">
            <a class="navbar-brand" href="http://localhost/" style="margin-left: 50px;" onclick="home()"><b>JobCV</b></a>
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
                        <a class="nav-link" href="php/add-job-applied.php">Tạo CV</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if ($_SESSION['login']) {
                        echo '<a href="user-manage-cv.php" class="fas fa-user-circle" id="icon"></a>';
                        echo '<a id="hello-user">Hello' . $_SESSION['username'] . '</a>';
                        echo '<li><a class="app-nav__item" href="php/logout.php"><i class="bx bx-log-out bx-rotate-180" id="icon-nav"></i></a>
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

    <?php


    $query = 'SELECT *, c.img_comp , c.address_comp, c.website_comp FROM job as j , company as c where j.ID_comp=? and j.ID_comp = c.ID_comp';
    if (!isset($_GET['id'])) {
        echo '';
    }
    $user_id = $_GET['id'];
    try {
        // $user_id = $_GET['id'];
        $stmt = $dbCon->prepare($query);
        $stmt->execute(array($user_id));

        // $len = $stmt->rowCount();
        // $cv_id = $stmt->fetchColumn(0);
        // $trang_thai = $stmt->fetchColumn(1);
    } catch (PDOException $ex) {
        die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
    }

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo
            '<div class="container mt-3">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <img src="' . $row['img_comp'] . '" alt="" width="100%" height="400px">
                    <nav class="navbar navbar-expand-sm " style="margin-top:20px" style="background-color: #e57373;">
                        <div class="container-fluid">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="" onclick="infoCpn()" style="color:white">Giới thiệu công
                                        việc</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="#jobs-cpn" style="color:white">Công việc khác</a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0" style="margin-right:20px">
                                <button class="btn btn-outline-light" type="button" style="margin-right: 5px;">Chia
                                    sẻ</button>
                                <button class="btn btn-recruit btn-outline-light" type="button" style="color: #e57373;"><a href="php/add-bookmark.php?pos=' . $row['name_job'] 
                                . '&ten_cty=' . $row['name_comp'] .'&ttcv=' . $row['info_job'] . '&yccv=' . $row['require_job'] .'&salary=' . $row['salary'] .'&ngaydang=' . $row['date_posted'] .'"
                                                style="text-decoration: none;color:white">Theo dõi</a></button>
                            </form>
                        </div>
                    </nav>
                    <div id="infor_comp" class="container" style="padding:20px;">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4>' . $row['name_job'] . ' – Salary Up to ' . $row['salary'] . '</h4>
                                <p>Salary: Lên tới ' . $row['salary'] . '</p>
                                <p>Trách nhiệm công việc: </br>
                                    ' . $row['info_job'] . '
                                    <p><button class="btn btn-recruit"
                                            type="button"><a href="php/add-job-applied.php?pos=' . $row['name_job'] . '&ten_cty=' . $row['name_comp'] . '"
                                                style="text-decoration: none;color:white">Ứng tuyển</a></button></p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="jobs-cpn" class="container" style="padding:20px; margin-top:20px">
                        <h2>Công việc khác</h2>
                        <ul class="nav flex-column">
                            <li class="nav-item1">
                                <a class="nav-link1" href="#">Fresher Software Engineer (Java)</a>
                                <p>NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN KỸ THƯƠNG VIỆT NAM</p>
                                <button class="btn btn-danger" type="button" style="margin-left:600px;">Ứng
                                    tuyển</button>
                            </li>
                            <li class="nav-item1">
                                <a class="nav-link1" href="#">Chuyên Viên Tư Vấn Dịch Vụ Tài Khoản (Hồ Chí Minh)</a>
                                <p>NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN KỸ THƯƠNG VIỆT NAM</p>
                                <button class="btn btn-danger" type="button" style="margin-left:600px;">Ứng
                                    tuyển</button>
                            </li>
                            <li class="nav-item1">
                                <a class="nav-link1" href="#">Graphic Designer (Thu Nhập Lên Tới 25M) </a>
                                <p>NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN KỸ THƯƠNG VIỆT NAM</p>
                                <button class="btn btn-danger" type="button" style="margin-left:600px;">Ứng
                                    tuyển</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div id="add_comp" style="padding:20px; margin-top:20px">
                        <b>Website</b>
                        <br>
                        <a href="' . $row['website_comp'] . '" style="color: red;">' . $row['website_comp'] . '</a>
                        <br>
                        <b>Địa chỉ công ty</b>
                        <ul>
                            <li>' . $row['address_comp'] . '</li>
                        </ul>
                        <b>Quy mô</b>
                        <p>Hơn 1000 nhân viên</p>

                        <b>Yêu cầu công việc</b>
                        <p>';
        foreach (explode(".", $row['require_job']) as $v) {
            echo '<li>' . $v . '</li>';
        }
        echo '</p>
        <b>Ngày đăng bài tuyển</b>
                        <p>' . $row['date_posted'] . '</p>
                    </div>
                </div>
            </div>
        </div>
        </div> ';
    }
    ?>
    <!-- <div class="container mt-3">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <img src="./images/ngan-hang-techcombank.jpg" alt="techcombank" width="100%" height="400px">
                <nav class="navbar navbar-expand-sm " style="margin-top:20px" style="background-color: #e57373;">
                    <div class="container-fluid">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="" onclick="infoCpn()" style="color:white">Giới thiệu công
                                    ty</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="#jobs-cpn" style="color:white">Công việc</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0" style="margin-right:20px">
                            <button class="btn btn-outline-light" type="button" style="margin-right: 5px;">Chia
                                sẻ</button>
                            <button class="btn btn-light" type="button" style="color: #e57373;">Theo dõi</button>
                        </form>
                    </div>
                </nav>

                <div id="infor_comp" class="container" style="padding:20px;">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4>Software Project Manager – Salary Up to $3500 <span><button class="btn btn-recruit"
                                        type="button"><a href='info-job.php?ungTuyen=true' onclick="checkLogin()"
                                            style="text-decoration: none;color:white">Ứng tuyển</a></button></span></h4>
                            <p>Salary: Lên tới 3.500 USD</p>
                            <p>Trách nhiệm công việc:
                                <br>
                                Coordinate internal resources and third parties/vendors for the flawless execution of
                                projects
                                Ensure that all projects are delivered on-time, within scope and within budget
                                Assist in the definition of project scope and objectives, involving all relevant
                                stakeholders and ensuring technical feasibility
                                Ensure resource availability and allocation
                                Develop a detailed project plan to monitor and track progress
                                Manage changes to the project scope, project schedule and project costs using
                                appropriate verification techniques
                                Measure project performance using appropriate tools and techniques
                                Report and escalate to management as needed
                                Manage the relationship with the client and all stakeholders
                                Perform risk management to minimize project risks
                                Establish and maintain relationships with third parties/vendor
                                Create and maintain comprehensive project documentation
                                Meet with clients to take detailed ordering briefs and clarify specific requirements of
                                each project
                                Track project performance, specifically to analyze the successful completion of short
                                and long-term goals
                                Develop comprehensive project plans to be shared with clients as well as other staff
                                members
                                Perform other related duties as assigned
                            </p>
                        </div>
                    </div>
                </div>

                <div id="jobs-cpn" class="container" style="padding:20px; margin-top:20px">
                    <h2>Công việc</h2>
                    <ul class="nav flex-column">
                        <li class="nav-item1">
                            <a class="nav-link1" href="#">Fresher Software Engineer (Java)</a>
                            <p>NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN KỸ THƯƠNG VIỆT NAM</p>
                            <button class="btn btn-danger" type="button" style="margin-left:600px;">Ứng
                                tuyển</button>
                        </li>
                        <li class="nav-item1">
                            <a class="nav-link1" href="#">Chuyên Viên Tư Vấn Dịch Vụ Tài Khoản (Hồ Chí Minh)</a>
                            <p>NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN KỸ THƯƠNG VIỆT NAM</p>
                            <button class="btn btn-danger" type="button" style="margin-left:600px;">Ứng
                                tuyển</button>
                        </li>
                        <li class="nav-item1">
                            <a class="nav-link1" href="#">Graphic Designer (Thu Nhập Lên Tới 25M) </a>
                            <p>NGÂN HÀNG THƯƠNG MẠI CỔ PHẦN KỸ THƯƠNG VIỆT NAM</p>
                            <button class="btn btn-danger" type="button" style="margin-left:600px;"
                                onclick="checkLogin()" href="info-job.php?ungTuyen=true">Ứng
                                tuyển</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div id="add_comp" style="padding:20px; margin-top:20px">
                    <b>Website</b>
                    <br>
                    <a href="https://www.techcombank.com.vn" style="color: red;">https://www.techcombank.com.vn</a>
                    <br>
                    <b>Địa chỉ công ty</b>
                    <ul>
                        <li>Số 191 Bà Triệu, Phường Lê Đại Hành, Quận Hai Bà Trưng, Thành phố Hà Nội</li>
                        <li>Số 9-11 Tôn Đức Thắng, Phường Bến Nghé, Quận 1, Thành phố Hồ Chí Minh</li>
                    </ul>
                    <b>Quy mô</b>
                    <p>Over 1000</p>
                    <b>Ngành nghề</b>
                    <p>Ngân hàng</p>
                    <b>Đãi ngộ của công ty</b>
                    <ul>
                        <li>Starting SALARY: $1,000</li>
                        <li>18-month FAST TRACK to accelerate your career: becoming future Experts/Team Leads with
                            clear dual career path</li>
                        <li>Rotations in numerous INITITIVE PROJECTS with total investments up to $500 million</li>
                        <li>Curate LEARNING ROADMAP: Leadership, Job Shadowing, Technical trainings</li>
                        <li>Instant FEEDBACKS/MENTORING with RECOGNITION</li>
                        <li>Working time: Mon-Fri</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div> -->

    <div class="footer mt-5">
        <div class="container">
            <b style="font-size: 30px; color: white">JobCV</b>
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
                        <form class="login-form" action="php/login.php" method="post">
                            <p style="text-align:center; font-weight:bold; font-size:20px;"> ĐĂNG NHẬP </p> </br>
                            <input type="email" name="username" placeholder="Nhập tài khoản email" /> </br>
                            <input type="password" name="password" placeholder="Nhập mật khẩu" />
                            <p class="message text-end"><a href="#forgot-password-form">Quên mật khẩu ?</a></p> </br>
                            <button id="login" type="submit" name="login" value="">Đăng nhập</button>
                        </form>
                        <form class="forgot-password-form" method="post" action="php/add-user.php">
                            <p style="text-align:center; font-weight:bold;"> QUÊN MẬT KHẨU </p>
                            <input type="text" name="" placeholder="Nhập tài khoản email" />
                            <p class="message text-end">Đã nhớ tài khoản ? <a href="#login-form">Đăng nhập</a></p> </br>
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
                        <form method="post" action="php/add-user.php" class="register-form">
                            <p style="text-align:center; font-weight:bold;"> ĐĂNG KÝ </p> </br>
                            <input type="text" name="name" placeholder="Nhập tên họ và tên của bạn" /> </br>
                            <input type="text" name="gender" placeholder="Nhập giới tính(Chỉ điền Nam, Nữ hoặc khác)" />
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script src="js/script.js"></script>
</body>

</html>