<?php
require_once('connection.php');


$query = 'DELETE FROM cv_user where cv_id = ?';

try {
    $stmt = $dbCon->prepare($query);
    $stmt->execute(array($_GET['id']));

    echo '<script type ="text/javascript">
            window.location.href = "../user-manage-cv.php";
            </script>';
    // echo json_encode(array('status' => true, 'data' => 'Thêm người dùng thành công'));
} catch (PDOException $ex) {
    die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
}
?>