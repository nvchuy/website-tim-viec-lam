<?php
require_once('connection.php');
session_start();
$user_id = $_SESSION['username'];

if (
    !isset($_POST['name']) || !isset($_POST['position']) || !isset($_POST['gender']) ||
    !isset($_POST['email']) || !isset($_POST['phone']) || !isset($_POST['dob']) ||
    !isset($_POST['address']) || !isset($_POST['intro']) || !isset($_POST['skill'])
    || !isset($_POST['exp'])
) {
    die(json_encode(array('status' => false, 'data' => 'Parameters not valid')));
}

if (
    $_POST['name'] == "" || $_POST['position'] == "" || $_POST['gender'] == "" ||
    $_POST['email'] == "" || $_POST['phone'] == "" || $_POST['dob'] == "" ||
    $_POST['address'] == "" || $_POST['intro'] == "" || $_POST['skill'] == "" ||
    $_POST['exp'] == ""
) {
    echo '<script type ="text/javascript">
    alert("Không được bỏ trống các vùng!");
    window.location.href = "http://localhost/";
    </script>';
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $position = $_POST['position'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $intro = $_POST['intro'];
    $skill = $_POST['skill'];
    $exp = $_POST['exp'];
    $status = "Chưa ứng tuyển";

    // $role = 'user';
    // Check phone number
    if (strlen(trim(preg_replace('/[^a-zA-Z_ -%][().][\/]/s', '', $phone))) != 10) {
        echo '<script type ="text/javascript">
        alert("Số điện thoại không tồn tại hoặc không chính xác");
        window.location.href = "http://localhost/";
        </script>';
    }
    // Check dob
    $tmp = $dob;
    $date_arr = explode('-', $tmp);
    if (($date_arr[0] > getdate()['year'] && $date_arr[1] > getdate()['mon'] && $date_arr[2] > getdate()['mday']) || (getdate()['year'] - $date_arr[0] < 18)) {
        echo '<script type ="text/javascript">
        alert("Ngày sinh không hợp lệ");
        window.location.href = "http://localhost/";
        </script>';
    }
    // Check gender
    if (strcmp(strtolower($gender), 'nam') && strcmp(strtolower($gender), 'nữ') && strcmp(strtolower($gender), 'khác')) {
        echo '<script type ="text/javascript">
        alert("Giới tính không hợp lệ");
        window.location.href = "http://localhost/";
        </script>';
    }

    $query = 'INSERT INTO cv_user(user_id, full_name, vi_tri_ung_tuyen, gioi_tinh, email, dien_thoai, ngay_sinh, dia_chi, gioi_thieu_ban_than, kinh_nghiem, ky_nang_khac, trang_thai) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';

    try {
        $stmt = $dbCon->prepare($query);
        $stmt->execute(array($user_id, $name, $position, $gender, $email, $phone, $dob, $address, $intro, $skill, $exp, $status));
        echo '<script type ="text/javascript">
            alert("Tạo CV thành công!");
            window.location.href = "../user-manage-cv.php";
            </script>';
        // echo json_encode(array('status' => true, 'data' => 'Thêm người dùng thành công'));
    } catch (PDOException $ex) {
        die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
    }
}
?>