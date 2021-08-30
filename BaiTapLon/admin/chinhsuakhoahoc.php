<?php
$conn = mysqli_connect('localhost', 'root', '', 'niit');
$id = $_GET["id"];
$sql = "select * from tbl_khoahoc  ";
$q = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chỉnh sửa bài viết - NIIT-ICT HÀ NỘI </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="css/quanlyuser.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="title ">
    <div class="title-left">
      <a href="quantri.php"><img src="image/logo.png" alt=""></a>
    </div>
    <div class="ad_logout title-right">
      <ul class="navbar-nav">

        <!-- Dropdown -->
        <li class="nav-item " style="margin-left: 70%">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color: white;">
            Admin
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" ">
                      <a class=" dropdown-item" href="">Profile</a>
            <hr>
            <a class="dropdown-item" href="">Help</a>
            <a class="dropdown-item" href="">Setting</a>
            <a class="dropdown-item" href="logout.php">Log out</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="center">
      <a class="" href="quantri.php" style="color: white;  "> <b>QUẢN TRỊ TRUNG TÂM NIIT-ICT HÀ NỘI</b> </a>
    </div>
  </div>



  <div class="content">
    <div class="content-left">
      <ul>
        <li class="nav-item1">
          <a href="quantri.php" style="color: white;">
            <i class="fa fa-home"> Trang chủ </i>
          </a>

        </li>
        <hr>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
            <i class="fa fa-list"> Quản trị danh mục</i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="thembaiviet.php">Thêm bài viết</a>
            <a class="dropdown-item" href="dsbaiviet.php">Danh sách bài viết</a>
            
          </div>
        </li>
        <hr>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
             <i class="fa fa-list" > Quản Trị Khóa Học</i> 
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="themkhoahoc.php">Thêm Khóa Học</a>
            <a class="dropdown-item" href="dskhoahoc.php">Danh Sách Khóa Học</a>
          </div>
        </li>            
        <hr>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
            <i class="fa fa-users" style="color: white;"> User</i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="quanlyuser.php">Quản lý user</a>
          </div>
        </li>
        <hr>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
            <i class="fa fa-list"> Contact</i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="dscontact.php">Danh sách Contact</a>
            
          </div>
        </li>
      </ul>

    </div>
    <div class="content-right">
      <div id="page-wrapper">
        <form method="post" action="">
          <h3 id="result"></h3>
          <h2 style="color: #6495ED">Chỉnh sửa Khóa Học</h2>

          <div class="form-group">
            <label>Tên Khóa Học</label>
            <input type="text" name="tenkhoahoc" class="form-control" value="">
          </div>

          <div class="form-group">
            <label>Hình Ảnh</label><br>
            <input type="file" name="hinhanh">
          </div>

          <div class="form-group">
            <label>Ngày Khai Giảng</label>
            <input type="text" name="ngaykhaigiang" class="form-control" value="">
          </div>

          <div class="form-group">
            <label>Thời Lượng</label>
            <input type="text" name="thoiluong" class="form-control" value="">
          </div>

          <div class="form-group">
            <label>Thời Gian</label>
            <input type="text" name="thoigian" class="form-control" value="">
          </div>

          <div class="form-group">
            <label>Lịch Học</label>
            <input type="text" name="lichhoc" class="form-control" value="">
          </div>
          <button type="submit" id="submit" name="submit" class="btn btn-primary ">Cập nhật</button>
        </form>

        <?php
        if (isset($_POST["submit"])) {

            $tenkhoahoc = $_POST["tenkhoahoc"];
            $hinhanh = $_POST["hinhanh"];
            $ngaykhaigiang = $_POST["ngaykhaigiang"];
            $thoiluong = $_POST["thoiluong"];
            $thoigian = $_POST["thoigian"];
            $lichhoc = $_POST["lichhoc"];
          
          $query2 = "UPDATE tbl_khoahoc SET tenkhoahoc = '$tenkhoahoc', hinhanh = '$hinhanh', ngaykhaigiang = '$ngaykhaigiang' , thoiluong='$thoiluong', thoigian='$thoigian', lichhoc='$lichhoc'  WHERE Id=$id";
           mysqli_query($conn, $query2);

           echo "<p>Khóa học đã được sửa thành công</p>";
           header ("location: dskhoahoc.php");
        }

        ?>


        </table>
      </div>



    </div>






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>

</html>