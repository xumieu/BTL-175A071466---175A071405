<?php
session_start();

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
    <title>ĐĂNG NHẬP - NIIT ICT Hà Nội</title>
    <link rel="stylesheet" href="css/login.css">

</head>

<body style="background-image: url(image/dangnhap.jpg); ">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT * from tbl_user where username='$username'";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($password == $row['password']) {

            $_SESSION['username'] = $row['username'];
            $_SESSION['ID'] = $row['ID'];
            $_SESSION['role'] = $row['role'];

            header('location:quantri.php'); // đúng thì vào trang admin
        } else {
            echo 'mat khau sai';
            header('location:login.php');
        }
    }
    ?>
    <div class="menu">
        <div class="login">
            <form method="post">
                <h2>ĐĂNG NHẬP</h2>
                <input type="text" placeholder="Username" name="username" class="username" required>
                <input type="password" placeholder="Password" name="password" class="password" required>
                <!--<button name="login" id="login" value="Login" type="submit"> Login</button> -->
                <input type="submit" name="submit" value="Đăng nhập">
                <br>
                <a href="dangkyuser.php"> Đăng ký</a> &nbsp &nbsp &nbsp &nbsp
                <a href="#">Quên mật khẩu?</a>
            </form>
        </div>
    </div>

</body>

</html>