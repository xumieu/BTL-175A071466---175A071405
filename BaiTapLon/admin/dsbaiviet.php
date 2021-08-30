<?php
$conn = mysqli_connect('localhost', 'root', '', 'niit');
$sql = "select *  from tbl_tintuc ";
$q = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Danh sách bài viết - NIIT-ICT HÀ NỘI </title>
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
      <h3>Danh sách bài viết</h3>
      <table class="table">
        <thead class="text-primary ">
          <tr>
            <th>IDPost</th>
            <th>Image</th>
            <th>Title</th>
            <th>Import</th>
            <th>Writer</th>
            <th class=" action">Option</th>
            
           
          </tr>
        </thead>
        </td>
        </tr>
          <?php
          while ($row = mysqli_fetch_array($q)) {

            echo "<tr>";
            echo "<td>" . $row['postid'] . "</td>";
            echo "<td>" . $row['hinhanh'] . "</td>";
            echo "<td>" . $row['tieude'] . "</td>";
            echo "<td>" . $row['mota'] . "</td>";
            echo "<td>" . $row['tacgia'] . "</td>";


            echo "<td class='action'>";
            echo "<a href='chinhsuabaiviet.php?id=" . $row['postid'] . "'> <i class='fa fa-pencil' aria-hidden='true' style='color: red;''></i></a> &nbsp;";
            echo "<a href='xoabaiviet.php?id=" . $row['postid'] . "'><i class='fa fa-times' aria-hidden='true' style='color: red;'></i></a>";
            echo "</td>";
            echo "</tr>";
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