<!DOCTYPE html>
<html lang="en" class="htmlAdmin">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);
    :root{
        --main-color: #E57373;
        --main-white: white;
    }
    .mybody4 {
        background-color: var(--main-color);
    }
    .form {
  margin: auto;
  background: #FFFFFF;
  max-width: 80%;
  padding: 45px;
  text-align: left;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    .form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 80%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  display: block;
  box-sizing: border-box;
  font-size: 14px;
    }

    .form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #e57373;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
    }

    .gender input, .gender label{
  margin-top: 10px;
  margin-left: 5px;
  display: inline;
  width: 60%;
    }
    .genderbox {
  width: 30% ;
  border: solid #f2f2f2 1px;
  background-color:#f2f2f2;
  border-radius: 5%;
    }
    .form button:hover,.form button:active,.form button:focus {
        background: #e57373;
    }
    .form .message {
    margin: 15px 0 0;
    color: #b3b3b3;
    font-size: 12px;
    }
    .form .message a {
    color: #e57373;
    text-decoration: none;
    }
    textarea {
    max-width: 100%;
    border: 1px solid black;
    }
    .form-group {
    float: left;
    }
    .form .register-form {
    display: none;
    }

    .container .info {
    margin: 50px auto;
    text-align: center;
    }
    .container .info h1 {
    margin: 0 0 15px;
    padding: 0;
    font-size: 36px;
    font-weight: 300;
    color: #1a1a1a;
    }
    .container .info span {
    color: #4d4d4d;
    font-size: 12px;
    }
    .container .info span a {
    color: #000000;
    text-decoration: none;
    }
    .container .info span .fa {
    color: #EF3B3A;
    }

    .navbar{
    background-color: var(--main-color)
    }
    .navbar-brand{
    color: var(--main-white);
    }
    .nav-link{
    color: var(--main-white);
    }
    #text-search{
    border-color: var(--main-color);
    }
    .select-style{
    color: #696666;
    border-radius: 5px;
    border-color: var(--main-color);
    }
    .select-style:hover{
    color: #E57373;
    }
    #btn-search{
    background-color: var(--main-color);
    color: var(--main-white);
    }
    .list-group-item{
    border-color: var(--main-color);
    }

    .name-dn{
    margin-left: 2px;
    }

    .bg-dn{
    background-color: var(--main-color);
    color: var(--main-white);
    }
    .card{
    border-color: var(--main-color);
    }
    .salary{
    color: red;
    }

    .footer{
    background-color: var(--main-color);
    color: var(--main-white);
    padding: 20px;
    }

    .btn-color{
    background-color: var(--main-color);
    color: var(--main-white);
    border-color: var(--main-color);
    }

    .btn-color:hover{
    background: #f5d3d3;
    }

    .see-more{
    text-decoration: none;
    color: var(--main-color);
    }
    .see-more:hover{
    color: #f5d3d3;
    }

    .bg-job{
    border-radius: 10px;
    background-color: #f5d3d3;
    }
 
    .icon-heart{
    position: absolute;
    right: 30px;
    font-size: 20px;
    text-decoration: none;
    color: #e9bdbd;
    }
    .icon-heart:hover{
    color: var(--main-color);
    }
    .text-job{
    text-decoration: none;
    color: black;
    }
    .text-job:hover{
    color: var(--main-color);
    }

    #icon{
    position: relative;
    top: 8px;
    right: 8px;
    font-size: 25px;
    text-decoration: none;
    color: var(--main-white);
    }
    #icon:hover{
    color: #f5d3d3;
    }
    #hello-user{
    position: relative;
    top: 4px;
    color: var(--main-white);
    font-size: 20px;
    margin-right: 10px;
    }

    .container-cv{
    margin-bottom: -25px;
    }
    .text-con-cv{
    text-decoration: none;
    font-size: 22px;
    color: rgb(43, 43, 43);
    }
    .text-con-cv:hover{
    color: var(--main-color);
    }
    .iconPro{
    background-color: var(--main-color);
    border-color: var(--main-color);
    }
    .iconPro:hover{
    background: #e9bdbd;
    border-color: #e9bdbd;
    }
    .table-manage-cv{
    margin-bottom: 150px;
    }

    /* inf-cpn */
    #jobs-cpn, #add_comp, #infor_comp {
    background-color: #f5dede;
    border-radius: 10px;
    }
    .nav-item1{
    border: 1px solid var(--main-color);
    margin: 10px;
    padding: 10px;
    background-color: #fbbebe;
    border-radius: 10px;
    }
    .nav-link1{
    text-decoration: none;
    color:black;
    font-weight:700;

    }
    .nav-link1:hover{
    color: #f5dede;
    }
    /* Chi tiết cv */
    .btn-recruit{
    background-color: var(--main-color);
    color: var(--main-white);
    position: absolute;
    right: 450px;
    }
    .btn-recruit:hover{
    background-color: var(--main-white);
    color: var(--main-color);
    }
    /* .info-job{
    margin-top: 25px;
    } */
    /*******************************CSS ADMIN*******************************/
    body.mybody1 {
    background-image: url(../images/bg_comp.jpg);
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
    body.mybody2 {
    background-image: url(../images/bg_user.jpg);
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
    body.mybody3 {
    background-image: url(../images/bg_post.png);
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
    body.mybody4{
    background-image: url(../images/bg_admin.jpg);
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    }

    html,
    body {
    font-family: 'Roboto', sans-serif;
    font-size: 17px;
    scroll-behavior: smooth;
    }

    .input1 {
    outline: none;
    border: none;
    width: 100%;
    font-size: 100%;
    font-family: 'Roboto', sans-serif;
    }

    .wrap-input1 {
    position: relative;
    border-bottom: 2px solid #b2bec3;
    width: 100%;
    }

    .wrap-input1 .input {
    color: #272a2b;
    display: block;
    width: 100%;
    padding: 0 4px;
    background-color: rgba(255, 255, 255, 0.688);
    }

    .button1 {
    text-align: center;
    }
    /*******************************TABLE*******************************/

    .custom-table1 {
    position: relative;
    }

    .custom-table1 th {
    background-color: #fff;
    position: sticky;
    top: 0;
    }

    .custom-table1 thead tr th:first-child,
    .custom-table1 thead tr td:first-child {
    border-top-left-radius: 7px;
    border-bottom-left-radius: 7px;
    }

    .custom-table1 thead tr th:last-child,
    .custom-table1 thead tr td:last-child {
    border-top-right-radius: 7px;
    border-bottom-right-radius: 7px;
    }

    .custom-table1 thead tr,
    .custom-table1 thead th {
    border-top: none;
    border-bottom: none !important;
    }

    .custom-table1 tbody th,
    .custom-table1 tbody td {
    color: #2d3436;
    padding: 16px 12px;
    font-weight: 300;
    }

    .custom-table1 tbody tr:not(.spacer) {
    border-radius: 7px;
    overflow: hidden;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    }

    .custom-table1 tbody tr:not(.spacer):hover {
    -webkit-box-shadow: 0 2px 10px -5px rgba(0, 0, 0, 0.7);
    box-shadow: 0 2px 10px -5px rgba(0, 0, 0, 0.7);
    }

    .custom-table1 tbody tr th,
    .custom-table1 tbody tr td {
    background: #dfe6e9;
    border: none;
    }

    .custom-table1 tbody tr th:first-child,
    .custom-table1 tbody tr td:first-child {
    border-top-left-radius: 7px;
    border-bottom-left-radius: 7px;
    }

    .custom-table1 tbody tr th:last-child,
    .custom-table1 tbody tr td:last-child {
    border-top-right-radius: 7px;
    border-bottom-right-radius: 7px;
    }

    .custom-table1 tbody tr.spacer td {
    padding: 0 !important;
    height: 10px;
    border-radius: 0 !important;
    background: transparent !important;
    }

    .login-form1 {
    width: 100%;
    }

    .login-form1 .label-input {
    line-height: 45px;
    }
    .login-form1 .error span {
    font-size: 80%;
    color: #d63031;
    font-weight: 500;
    display: block;
    padding-bottom: 4px;
    }
    .box1 {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 80vh;
    }

    .box1 .contain_login1 {
    width: 550px;
    border-radius: 8px;
    border: 1px solid black;
    padding: 30px;
    background-color: rgba(171, 170, 170, 0.728);
    }
    button.wallet {
    text-align: left;
    font-size: 100%;
    margin: 8px 0px;
    width: 70%;
    }

    button.actived,
    button.wait,
    button.wait1,
    button.back {
    border: 2px solid transparent;
    background-color: transparent;
    border-radius: 4px;
    color: #000;
    padding: 16px;
    transition: 0.2s ease-in;
    }


    button.wait {
    border-color: #1da1f2;
    box-shadow: inset 0 0 8px #1da1f2, 0 0 8px #1da1f2;
    }

    button.wait:focus,
    button.wait:hover,
    button.wait:active {
    background: #1da1f2;
    }

    /* */
    button.wait1 {
    border-color: #6c5ce7;
    box-shadow: inset 0 0 8px #6c5ce7, 0 0 8px #6c5ce7;
    }

    button.wait1:focus,
    button.wait1:hover,
    button.wait1:active {
    background: #6c5ce7;
    }

    button.back {
    border-color: #636e72;
    box-shadow: inset 0 0 8px #636e72, 0 0 8px #636e72;
    }

    button.back:focus,
    button.back:hover,
    button.back:active {
    background: #636e72;
    }

    button.actived {
    border-color: #3de223;
    box-shadow: inset 0 0 8px #3de223, 0 0 8px #3de223;
    }

    button.actived:focus,
    button.actived:hover,
    button.actived:active {
    background: #3de223;
    }
    .button1 {
    text-align: center;
    /* margin-top: 20px; */
    }

    .button1 .btn_main {
    letter-spacing: 0.1em;
    cursor: pointer;
    line-height: 45px;
    max-width: 160px;
    position: relative;
    text-transform: uppercase;
    width: 100%;
    }

    /*btn_background*/
    .button1 .effect {
    color: #FFF;
    border: 4px solid #000;
    box-shadow: 0px 0px 0px 1px #000 inset;
    background-color: #000;
    overflow: hidden;
    position: relative;
    transition: all 0.3s ease-in-out;
    }

    .button1 .effect:hover {
    border: 4px solid #636e72;
    background-color: #FFF;
    box-shadow: 0px 0px 0px 4px #EEE inset;
    }

    /*btn_text*/
    .button1 .effect span {
    transition: all 0.2s ease-out;
    z-index: 2;
    }

    .button1 .effect:hover span {
    letter-spacing: 0.13em;
    color: #2d3436;
    }

    /*highlight*/
    .button1 .effect:after {
    background: #FFF;
    border: 0px solid #000;
    content: "";
    height: 155px;
    left: -75px;
    opacity: .8;
    position: absolute;
    top: -50px;
    -webkit-transform: rotate(35deg);
    transform: rotate(35deg);
    width: 50px;
    transition: all 1s cubic-bezier(0.075, 0.82, 0.165, 1);
    z-index: 1;
    }

    .button1 .effect:hover:after {
    background: #FFF;
    border: 20px solid #000;
    opacity: 0;
    left: 120%;
    -webkit-transform: rotate(40deg);
    transform: rotate(40deg);
    }
</style>
</head>

<body class="mybody4 bodytop">
    <div class="box1" style="min-height:100vh;">
        <div class="contain_login1">
            <form class="login-form1" method="POST" style="text-align: center;">
                <h2 style="text-align:center; margin-bottom:24px;">Trang chủ dành cho Admin</h2>
                <button class="actived wallet" name="list_1" ><a style="text-decoration: none" href="company_management.php">Quản lý danh sách công ty</a></button>
                <br>
                <button class="wait wallet" name="list_2"><a href="user_management.php" style="text-decoration: none">Quản lý danh sách người tìm kiếm việc làm</a></button>
                <br>
                <button class="wait1 wallet"><a href="job_management.php" style="text-decoration: none">Quản lý danh sách bài đăng</a></button>
                <br>
                <div class="button1">
                <button id="logoutAdmin" name="log_out" class="btn_main effect"><a href="logout.php" style="text-decoration: none">Đăng xuất</a></button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>