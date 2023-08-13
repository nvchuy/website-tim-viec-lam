<?php 
    include("session.php");
    $username = $_SESSION['username'];
    $sql = "SELECT name_comp FROM company where email_comp= '$username'";
    $recordset = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($recordset);
    $account = $row['name_comp'];
    $sql = "SELECT * FROM job_applied where ten_cong_ty= '$account'";
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
            <a class="navbar-brand" href="" style="margin-left: 50px;"><b>JobCV</b></a>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="job_comp.php">DS JOB</a>
                    </li>
                </ul>
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
                <h1><b>Danh sách các CV đã nhận</b></h1>
            </div>
            <div class="table-responsive" style="overflow: visible; margin-top: 12px;">
                <table class="table custom-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Vị trí ứng tuyển</th>
                            <th>Tên công ty</th>
                            <th>Ngày ứng tuyển</th>
                            <th>Trạng thái</th>
                            <th>Xác nhận</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                         while($row = mysqli_fetch_assoc($recordset)){   
                            if (($row['trang_thai'] != "accept") &&  ($row['trang_thai'] != "decline")) {
                            $id = $row['id'];
                           echo '<tr>
                            <td>'. $row['id'] .'</td>
                            <td>'. $row['ten_vi_tri'] .'</td>
                            <td>'. $row['ten_cong_ty'] .'</td>
                            <td>'. $row['ngay_ung_tuyen'] .'</td>
                            <td>'. $row['trang_thai'] .'</td>
                            <td>  
                                <form method="GET" action="accept.php">
                                    <button type="submit" name="accept" id="accept" value="'.$id.'" class="btn btn-success button arrow ms-3" >Xác nhận</button>
                                </form>
                                <form method="GET" action="decline.php">
                                    <button type="submit" name="decline" id="decline" value="'.$id.'" class="btn btn-danger button arrow ms-3" >Từ chối</button>
                                </form>
                            </td>
                           </tr>';
                            }
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