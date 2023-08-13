<?php
require_once('user/php/connection.php');
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = 'SELECT email_comp,pass_comp FROM company where email_comp = ? and pass_comp = ?';

    try {
        $stmt = $dbCon->prepare($query);
        $stmt->execute(array($username, $password));
        if ($stmt->rowCount()) {
            $_SESSION['username'] = $stmt->fetchColumn(0);
            $_SESSION['password'] = $stmt->fetchColumn(1);
        } else {
            echo '<script type ="text/javascript">
                alert("Invalid username or password");
                window.location.href = "company.php";
                </script>';
        }

        if (isset($_SESSION['username'])) {
            $_SESSION['login'] = true;
            header("location: ../home_comp.php");
        }

    } catch (PDOException $ex) {
        die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
    }
}
?>