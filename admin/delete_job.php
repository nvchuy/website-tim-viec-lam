<?php
    include("session.php");
    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $id = $_GET['id'];
        if (!empty($id))
		{
            $sql = $conn->query("DELETE FROM job WHERE ID_job='$id'");
        }
        header("location:job_management.php");
    }
    
?>