<?php
session_start();
require_once('connection.php');


if (!$_SESSION['login']) {
    echo '<script type ="text/javascript">
    alert("Vui lòng đăng nhập để sử dụng chức năng này");
    window.location.href = "http://localhost/";
    </script>';
} else {
    // header('location: ../info-job.php?id='.$_GET['id']);
    $pos = $_GET['pos'];
    $ten_cty = $_GET['ten_cty'];
    $ngay_ung_tuyen = date("d-m-Y");
    $trang_thai = "Waitting";
    $username = $_SESSION['username'];
    $query = 'INSERT INTO job_applied(ten_vi_tri, ten_cong_ty, ngay_ung_tuyen, trang_thai, username) VALUES (?,?,?,?,?)';

    try {
        $stmt = $dbCon->prepare($query);
        $stmt->execute(array($pos, $ten_cty, $ngay_ung_tuyen, $trang_thai, $username));
        echo '<script type ="text/javascript">
            alert("Ứng tuyển thành công!");
            window.location.href = "../job-applied.php";
            </script>';
        // echo json_encode(array('status' => true, 'data' => 'Thêm người dùng thành công'));
    } catch (PDOException $ex) {
        die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
    }
}

?>