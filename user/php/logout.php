<?php
session_start();
session_destroy();
// $_SESSION['login'] = false;
header('location: http://localhost/');
?>