<?php
session_start();
session_destroy();
header('location: company.php');
?>