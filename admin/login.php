<?php
require_once('connection.php');
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = ($_POST['password']);
    if ($username == "admin"){
    $query = 'SELECT email,pass FROM user where email = ? and pass = ?';
    try {
        $stmt = $dbCon->prepare($query);
        $stmt->execute(array($username, $password));
        if ($stmt->rowCount()) {
            $_SESSION['username'] = $stmt->fetchColumn(0);
            $_SESSION['password'] = $stmt->fetchColumn(1);
        } else {
            echo '<script type ="text/javascript">
                alert("Invalid username or password");
                window.location.href = "admin.php";
                </script>';
        }

        if (isset($_SESSION['username'])) {
            $_SESSION['login'] = true;
            header("location: admin_home.php");
        }

    } catch (PDOException $ex) {
        die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
    }}
    else {
        echo '<script type ="text/javascript">
                alert("Invalid username or password");
                window.location.href = "admin.php";
                </script>';
    }
}
?>