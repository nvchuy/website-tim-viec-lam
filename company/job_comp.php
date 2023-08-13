<?php 
    include("session.php");
    $username = $_SESSION['username'];
    $sql = "SELECT name_comp FROM company where email_comp= '$username'";
    $recordset = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($recordset);
    $account = $row['name_comp'];
    $sql = "SELECT * FROM job where name_comp= '$account'";
    $recordset = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- <meta charset="UTF-8"> -->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=chrome"> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <title>Web Cuoi Ky</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet'type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../user/css/style.css">
    <style>
        form {
            display: inline;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm nav-1">
        <div class="container-fluid">
            <a class="navbar-brand" href="home_comp.php" style="margin-left: 50px;"><b>JobCV</b></a>
                <ul class="nav navbar-nav navbar-right">
                    <a href="dangtuyen.php"><button class="btn btn-outline-light" type="button" id="btn-dt" 
                        style="margin-right: 20px;">Đăng Tuyển</button></a>
                    <a href="logout.php"><button class="btn btn-outline-light" type="button" id="btn-dt" 
                        style="margin-right: 20px;">Đăng Xuất</button></a>
                </ul>
        </div>
    </nav>
    <div class="container">
        <p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title my-3 text-center">
                <h1><b>Danh sách các Job đã đăng</b></h1>
            </div>
            <div class="table-responsive" style="overflow: visible; margin-top: 12px;">
                <table class="table custom-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên vị trí</th>
                            <th>Thông tin về công việc</th>
                            <th>Yêu cầu công việc</th>
                            <th>Lương</th>
                            <th>Ngày đăng</th>
                            <th>Tùy chỉnh</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($recordset)){   
                            $id = $row['ID_job'];
                            echo '<tr>
                            <td>'. $row['ID_job'] .'</td>
                            <td>'. $row['name_job'] .'</td>
                            <td>'. $row['info_job'] .'</td>
                            <td>'. $row['require_job'] .'</td>
                            <td>'. $row['salary'] .'</td>
                            <td>'. $row['date_posted'] .'</td>
                            <td>  
                                <form method="GET" action="delete_job.php">
                                    <button type="submit" name="delete" id="delete" value="'.$id.'" class="btn btn-danger arrow ms-3" >Xóa Job</button>
                                </form>
                            </td>
                           </tr>';
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <b style="font-size: 30px; color: white;">JobCV</b>
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