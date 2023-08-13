<?php 
    include("session.php");
    $sql = "select * from user";
    $recordset = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh sách người tìm việc làm</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style_management.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    .delete input {
    background-color: aliceblue;    
    width: 80%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
    border-radius:5% ;

    }
    .delete {
        border: 1px solid black;
        background-color: #f2f2f2;;   
        max-width: 30%;
        padding: 15px;
        float:right;
    }
</style>
</head>

<body class="mybody2 bodytop">
    <div class="container">
        <p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title my-3 text-center ">
                    <h1><b>Danh sách tài khoản</b></h1>
            </div>
        <div class="table-responsive" style="overflow: visible; margin-top: 12px;">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Họ và tên</th>
                        <th>Ngày sinh</th>
                        <th>Số điện thoại</th>
                        <th>Giới tính</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($recordset)){
                ?>
                    <tr>
                        <td><?php echo $row['STT']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['birth']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <form class="delete"  action="delete_user.php" method="GET">
            <div class="form-group">
            <span style="color:black;" ><b>Nhập ID muốn xóa</b></span>
            <input type="text" id="id" name="id" placeholder="Nhập ID"/>
            </div>
            <button type="submit" class="btn btn-danger button arrow" >Xóa tài khoản</button>
            <button class="btn btn-success"><a href="admin_home.php" style="text-decoration: none; color: White">Trở về</a></button>
    </form>
</div>
</body>
</html>