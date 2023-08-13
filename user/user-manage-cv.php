<?php
session_start();
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
                       
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <a href="#" class="fas fa-user-circle" id="icon"></a>
                        <a id="hello-user">Hello
                            <?php echo $_SESSION['username'] ?>
                        </a>
                        <li><a class="app-nav__item" href="user/php/logout.php"><i class='bx bx-log-out bx-rotate-180'
                                    id="icon-nav"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <!-- Quản lý CV -->
        <div class="container mt-3">
            <div class="row">
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
            <div class="row">
                <h3 style="color: #E57373;">Quản Lý CV</h3>
                <br>
                <table class="table table-manage-cv">
                    <thead>
                        <tr>
                            <th>CV ID</th>
                            <th>Trạng Thái</th>
                            <th>Tùy Chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once('php/connection.php');

                        $query = 'SELECT cv_id,trang_thai FROM cv_user where user_id=?';

                        try {
                            $stmt = $dbCon->prepare($query);
                            $stmt->execute(array($_SESSION['username']));

                            // $len = $stmt->rowCount();
                            // $cv_id = $stmt->fetchColumn(0);
                            // $trang_thai = $stmt->fetchColumn(1);
                        } catch (PDOException $ex) {
                            die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
                        }
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo '<tr>
                                <td>' . $row['cv_id'] . '</td>
                                <td>' . $row['trang_thai'] . '</td>
                                <td>
                                    <button class="btn btn-primary btn-sm trash iconPro" type="button" title="Xóa"
                                        id="show-emp" data-toggle="modal" data-target="#deletemodal"><a href="php/delete-cv.php?id='.$row['cv_id'].'" style="color:white;"><i
                                        class="fas fa-trash-alt"></i></a>
                                    </button>
                            
                                    <button class="btn btn-primary btn-sm iconPro" type="button" title="Sửa" id="show-emp1"
                                        data-toggle="modal" data-target="#modalEdit"><i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>