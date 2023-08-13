<?php 
    include("session.php");
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = $_GET["accept"];
        $sql = "UPDATE `job_applied` SET `trang_thai`='accept' WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
            header("location:home_comp.php");
          } else {
            echo "Error updating record: " . $conn->error;
          }
    }
    
?>
