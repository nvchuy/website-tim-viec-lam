<?php
require_once('connection.php');

if (
    !isset($_POST['name']) || !isset($_POST['gender']) || !isset($_POST['phone']) ||
    !isset($_POST['address']) || !isset($_POST['dob']) || !isset($_POST['email']) ||
    !isset($_POST['pwd']) || !isset($_POST['confirm-pwd'])
) {
    die(json_encode(array('status' => false, 'data' => 'Parameters not valid')));
}

if (
    $_POST['name'] == "" || $_POST['gender'] == "" || $_POST['phone'] == "" ||
    $_POST['address'] == "" || $_POST['dob'] == "" || $_POST['email'] == "" ||
    $_POST['pwd'] == "" || $_POST['confirm-pwd'] == ""
) {
    echo '<script type ="text/javascript">
    alert("Không được bỏ trống các vùng!");
    window.location.href = "http://localhost/";
    </script>';
}

if (isset($_POST['regis'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $pwd = $_POST['pwd'];
    $confirm_pwd = $_POST['confirm-pwd'];
    // $role = 'user';

    //check email 
    $query = 'SELECT email FROM user where email = ?';

    try {
        $stmt = $dbCon->prepare($query);
        $stmt->execute(array($email));
        $count = $stmt->rowCount();
        // echo $count;
        if ($count == 1) {
            echo '<script type ="text/javascript">
                alert("Tài khoản email đã tồn tại");
                window.location.href = "http://localhost/";
                </script>';
        }

    } catch (PDOException $ex) {
        die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
    }

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

    // Check len pwd
    if (strlen($pwd) < 6 && strlen($confirm_pwd) < 6) {
        echo '<script type ="text/javascript">
        alert("Mật khẩu phải nhiều hơn 6 ký tự");
        window.location.href = "http://localhost/";
        </script>';
    }

    // Check legit/index.php
    if ($pwd != $confirm_pwd) {
        echo '<script type ="text/javascript">
        alert("Mật khẩu hoặc mật khẩu xác nhận không đúng!");
        window.location.href = "http://localhost/";
        </script>';
    } else {
        $password = md5($pwd);
        $query = 'INSERT INTO user(name, birth, phone, gender, address, email, pass) VALUES (?,?,?,?,?,?,?)';

        try {
            $stmt = $dbCon->prepare($query);
            $stmt->execute(array($name, $dob, $phone, $gender, $address, $email, $password));
            echo '<script type ="text/javascript">
            alert("Đăng ký tài khoản thành công!");
            window.location.href = "http://localhost/";
            </script>';
            // echo json_encode(array('status' => true, 'data' => 'Thêm người dùng thành công'));
        } catch (PDOException $ex) {
            die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
        }
    }
}
?>