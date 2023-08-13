<?php
session_start();
require_once('connection.php');

$pos = $_GET['pos'];
$ten_cty = $_GET['ten_cty'];
$ttcv = $_GET['ttcv'];
$yccv = $_GET['yccv'];
$salary = $_GET['salary'];
$ngay_dang = $_GET['ngaydang'];
$username = $_SESSION['username'];

$query = 'INSERT INTO bookmark(ten_cong_viec, ten_cong_ty, tt_cong_viec, yc_cong_viec, salary, ngaydang, username) VALUES (?,?,?,?,?,?,?)';

try {
    $stmt = $dbCon->prepare($query);
    $stmt->execute(array($pos, $ten_cty, $ttcv, $yccv, $salary, $ngay_dang, $username));
    echo '<script type ="text/javascript">
            window.location.href = "../bookmark.php";
            </script>';
    // echo json_encode(array('status' => true, 'data' => 'Thêm người dùng thành công'));
} catch (PDOException $ex) {
    die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
}

?>