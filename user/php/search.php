<?php
require_once('connection.php');
if (isset($_POST['find'])) {
    $name = $_POST['search'];
    $place = $_POST['place'];

    echo '<script type ="text/javascript">
        window.location.href="http://localhost/";
        $(".content").empty();

    </script>';
    // echo $name;
    // echo $name;
    // echo $place;
    // $query = "SELECT * FROM company WHERE name_comp LIKE ? OR info_comp LIKE ? OR address_comp LIKE ?";

    // try {
    //     $stmt = $dbCon->prepare($query);
    //     $stmt->execute(array('%$name%', '%$name%', '%$place%'));
    //     $row = $stmt->rowCount();
    // } catch (PDOException $ex) {
    //     die(json_encode(array('status' => false, 'data' => $ex->getMessage())));
    // }
    // if ($row > 0) {
    //     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //         echo '<script type ="text/javascript">
    //             $(".content").empty
    //         </script>';
    //         echo
    //         '<tr>
    //             <td>' . $row['name_comp'] . '</td>
    //         </tr>';
    //     }
    // } else {
    //     echo '<script type ="text/javascript">
    //             $(".content").empty
    //             $(".content").append("Không tìm thấy kết quả")
    //         </script>';
    // }

}
?>