<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web Cuoi Ky</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);
    :root {
        --main-color: #E57373;
        --main-white: white;
    }
    .navbar {
        background-color: var(--main-color)
    }

    .navbar-brand {
        color: var(--main-white);
    }

    .nav-link {
        color: var(--main-white);
    }
    nav {
        height: 70px;
    }
    .form {
        margin: auto;
        background: #FFFFFF;
        max-width: 35%;
        text-align: left;
        border: 1px solid gray;
    }
    .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        padding: 15px;
        display: block;
        color: #717171;
        font-size: 14px;
    }
    .form button {
        display: flex;
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #e57373;
        width: 150px;
        border: 0;
        padding: 15px;
        border-radius: 5px;
        margin: auto;
        color: #FFFFFF;
        text-align: center;
        font-size: 14px;
        cursor: pointer;
        justify-content: center;
    }
    .footer {
        background-color: var(--main-color);
        color: var(--main-white);
        padding: 2%;
    }
    .container-mid {
        height: 358px;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm nav-1">
        <div class="container">
            <a class="navbar-brand" href="company.php"><b>JobCV</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav navbar-nav navbar-right ">
                <li class="nav-item">
                    <a href="http://localhost/"><button type="button" class="btn btn-light" style="text-decoration:none;color: black ">Trang Tìm Việc</button></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-mid">
    <div class="form mt-4 p-3">
        <form class="login-form " action="login_comp.php" method="post">
            <p style="text-align:center; font-weight:bold; font-size:20px;"> ĐĂNG NHẬP CHO CÔNG TY </p> </br>
            <input type="email" name="username" placeholder="Nhập tài khoản email" /> </br>
            <input type="password" name="password" placeholder="Nhập mật khẩu" />
            <button id="login" class="mt-2" type="submit" name="login" value="">Đăng nhập</button>
        </form>
    </div>
    </div>
    <div class="footer" id="footer-contact">
        <div class="container text-footer">
            <b style="font-size: 20px;">JobCV</b>
            <p>Số 19, đường Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, Thành phố Hồ Chí Minh
                <br>
                Liên hệ: 0357766990 - contact@jobcv.vn
                <br>
                Copyright &copy; 2022 Tìm kiếm việc làm JobCV
            </p>
        </div>
    </div>
</body>
</html>