<?php
require_once('connection.php');
session_start();

// if (isset($_POST['forgot-pwd'])) {
//     header("location: ../verify_web.html");
// }

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    // $password = md5($_POST['password']);
    $password = $_POST['password'];

    $query = 'SELECT email,pass,name FROM user where email = ? and pass = ?';

    try {
        $stmt = $dbCon->prepare($query);
        $stmt->execute(array($username, $password));
        if ($stmt->rowCount()) {
            $_SESSION['username'] = $stmt->fetchColumn(0);
            $_SESSION['password'] = $stmt->fetchColumn(1);
            $_SESSION['account'] = $stmt->fetchColumn(2);
        } else {
            echo '<script type ="text/javascript">
                alert("Invalid username or password");
                window.location.href = "http://localhost";
                </script>';
        }

        if (isset($_SESSION['username'])) {
            $_SESSION['login'] = true;
            header("location: http://localhost");
        }

    } catch (PDOException $ex) {
        die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
    }
}
?>