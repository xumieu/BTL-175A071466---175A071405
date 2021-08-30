<?php
session_start();

?>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'niit');
if (!$conn) {
    die('Khong the ket noi DB');
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ĐĂNG KÝ NGƯỜI DÙNG - NIIT ICT Hà Nội </title>
    <link rel="stylesheet" href="css/dangky.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body style="background-image: url(image/dangnhap.jpg);">

    <h1>ĐĂNG KÝ </h1>
    <form action="" method="post">
        <div class="pom-agile">
            <input placeholder="Username" name="username" type="username" required="">
        </div> <br>

        <div class="pom-agile">
            <input placeholder="Password" name="password" class="pass" type="password" required="">
        </div><br>

        <div class="pom-agile">
            <input placeholder="E-mail" name="email" type="email" required="">
        </div><br>

        <div class="pom-agile" >
            <input placeholder="Fullname" name="fullname" type="fullname" required="">
        </div><br>


        <div class="right-w3l">
            <input type="submit" name="submit" value=" Đăng ký">
        </div>
    </form>
    <?php

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $fullname = $_POST['fullname'];
        
        // $role = mysqli_real_escape_string($conn,$_POST['name_role']);
        // $password = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO tbl_user  (username,password,email,fullname ) values('$username','$password','$email','$fullname')";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));

        echo " <p style='color:white'>Đăng ký thành công</p><a href='../admin/login.php' style='text-decoration: none; color:white'>Đăng nhập</a>";
        
    }

    ?>

</body>

</html>