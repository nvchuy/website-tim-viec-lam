<?php
session_start();
if ($_SESSION['login'] == false) {
    echo '<script type ="text/javascript">
                alert("Vui lòng đăng nhập để sử dụng chức năng này");
                window.location.href = "http://localhost/";
                </script>';
    die;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Tạo CV</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link type="text/css" href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm">
        <div class="container">
            <a class="navbar-brand " href="http://localhost/"><b>JobCV</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#job-new">Việc Làm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="taoCV.php">Tạo CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#popular-company">Công Ty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer-contact">Contact</a>
                    </li> -->
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <a href="user-manage-cv.php" class="fas fa-user-circle" id="icon"></a>
                    <a id="hello-user">Hello
                        <?php echo $_SESSION['username'] ?>
                    </a>
                    <li><a class="app-nav__item" href="php/test.php"><i class='bx bx-log-out bx-rotate-180'
                                id="icon-nav"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-3">
            <div class="form">
                <h2>Tạo CV</h2>
                <form method="post" action="php/add-cv-user.php">
                    <div class="col-4">
                        Tên đầy đủ <input type="text" name="name" placeholder="Tên đầy đủ" />
                        Vị trí ứng tuyển <input type="text" name="position" placeholder="Vị trí ứng tuyển" />
                        Giới tính <input type="text" name="gender" placeholder="Giới tính" />
                        Email <input type="text" name="email" placeholder="Email" />
                        Điện thoại <input type="text" name="phone" placeholder="Điện thoại" />
                        Ngày sinh <input type="date" name="dob" placeholder="Ngày sinh" />
                        Địa chỉ <input type="text" name="address" placeholder="Địa chỉ" />
                        Giới thiệu bản thân <textarea type="text" name="intro" placeholder="Giới thiệu bản thân"
                            rows="4" cols="60"></textarea>
                        Kinh nghiệm <textarea id="textarea" type="text" name="exp" placeholder="Kinh Nghiệm" rows="4"
                            cols="60"></textarea>
                        Kĩ năng khác <textarea id="textarea" type="text" name="skill" placeholder="Kĩ năng khác"
                            rows="4" cols="60"></textarea>
                        <button type="submit" name="submit" value="">Xác nhận</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>