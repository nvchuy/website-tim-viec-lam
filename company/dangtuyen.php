<?php
    include("session.php");
    $username = $_SESSION['username'];
    $sql = "SELECT name_comp,ID_comp FROM company where email_comp= '$username'";
    $recordset = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($recordset);
    $account = $row['name_comp'];
    $id_comp = $row['ID_comp'];
    if($_SERVER["REQUEST_METHOD"] == "POST") {  
        $name_job = $_POST['name_job'];
        $info_job = $_POST['info_job']; 
        $require_job = $_POST['require_job'];
        $salary = $_POST['salary'];     
        $date_posted = date("Y/m/d");
        $sql = "INSERT INTO job(name_job,info_job,name_comp,ID_comp,require_job,salary,date_posted) VALUES ('$name_job','$info_job','$account',' $id_comp','$require_job','$salary','$date_posted')";
        if ($conn->query($sql) === TRUE) {
        header("location: job_comp.php");
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Đăng tuyển</title>
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet'
    type='text/css'>
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<style>
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);
    :root {
        --main-color: #E57373;
        --main-white: white;
    }
    .form button {
        display: flex;
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #e57373;
        width: 150px;
        border: 0;
        padding: 15px;
        border-radius: 5px;
        margin: auto;
        color: #FFFFFF;
        text-align: center;
        font-size: 14px;
        cursor: pointer;
        justify-content: center;
    }
    .navbar {
        background-color: var(--main-color)
    }

    .navbar-brand {
        color: var(--main-white);
    }

    .nav-link {
        color: var(--main-white);
    }
    nav {
        height: 70px;
    }
  textarea {
    resize: none;
    border: none;
    background-color: #f2f2f2;
    font-family: "Roboto", sans-serif;
    width: 100%;
    outline: 0;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
  }
  .form {
  margin: auto;
  background: #FFFFFF;
  width: 70%;
  padding: 3%;
  text-align: left;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }
  .form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  display: block;
  box-sizing: border-box;
  font-size: 14px;
}
footer {
        background-color: var(--main-color);
        color: var(--main-white);
        padding: 2%;
    }
</style>

<body>
  <nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="home_comp.php" style="margin-left: 50px;"><b>JopCV</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="job_comp.php">DS JOB</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <a href="home_comp.php"><button class="btn btn-light" id="btnlogin" type="button" style="width:auto;color:black">Trở về</button></a>
        </ul>
      </div>
    </div>
  </nav>

  <div class="login-page">
    <div class="form mt-4">
      <form method="POST" action="dangtuyen.php">
        <label for="html">Job's name</label><br>
        <input type="text" name="name_job" placeholder="Job's name" />
        <label for="html">Information about Job</label><br>
        <textarea id="textarea" type="text" name="info_job" placeholder="Information" rows="8"cols="187"></textarea>
        <br><label for="html">Salary</label><br>
        <input type="text" name="salary" placeholder="Salary" />
        <label for="html">Describe IT Requirements</label><br>
        <textarea id="textarea" type="text" name="require_job" placeholder="Describe Requirements" rows="8"cols="187"></textarea>
        <button type="submit" name="submit">Xác nhận </button>
      </form>
    </div>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>
</body>
</html>