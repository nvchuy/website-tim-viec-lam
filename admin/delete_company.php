<?php
    include("session.php");
    
    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $id = $_GET['id'];
        if (!empty($id))
		{
            $sql = $conn->query("DELETE FROM company WHERE ID_comp='$id'");
        }
        header("location: company_management.php");
        
    }
    
?>