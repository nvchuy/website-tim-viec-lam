<?php
    include("session.php");
    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $id = $_GET['id'];
        if (!empty($id))
		{
            $sql = $conn->query("DELETE FROM user WHERE STT='$id'");
        }
        header("location:user_management.php");
    }
?>