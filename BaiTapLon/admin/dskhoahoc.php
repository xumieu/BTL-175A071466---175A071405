<?php
$conn = mysqli_connect('localhost', 'root', '', 'niit');
$sql = "select *  from tbl_khoahoc ";
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
      <a href="../admin/quantri.php"><img src="image/logo.png" alt=""></a>
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
      <a class="" href="../admin/quantri.php" style="color: white;  "> <b>QUẢN TRỊ TRUNG TÂM NIIT-ICT HÀ NỘI</b> </a>
      
    </div>
</div>

    <div class="content text-center">
      <h2 style="color: #08298A;">Danh sách khóa học</h2>
      <table class="table">
        <thead class="text-primary ">
          <tr>
            <th>Id</th>
            <th>Tên Khóa Học</th>           
            <th>Ngày Khai Giảng</th>
            <th>Thời Lượng</th>
            <th>Thời Gian</th>
            <th>Lịch học</th>
            <th>Hình Ảnh</th>
            <th class=" action">Option</th>
            
           
          </tr>
        </thead>
        </td>
        </tr>
          <?php
          while ($row = mysqli_fetch_array($q)) {

            echo "<tr>";
            echo "<td>" . $row['Id'] . "</td>";
            echo "<td>" . $row['tenkhoahoc'] . "</td>";           
            echo "<td>" . $row['ngaykhaigiang'] . "</td>";
            echo "<td>" . $row['thoiluong'] . "</td>";
            echo "<td>" . $row['thoigian'] . "</td>";
            echo "<td>" . $row['lichhoc'] . "</td>";
            echo "<td>" . $row['hinhanh'] . "</td>";


            echo "<td class='action'>";
            echo "<a href='chinhsuakhoahoc.php?id=" . $row['Id'] . "'> <i class='fa fa-pencil' aria-hidden='true' style='color: red;''></i></a> &nbsp;";
            echo "<a href='xoakhoahoc.php?id=" . $row['Id'] . "'><i class='fa fa-times' aria-hidden='true' style='color: red;'></i></a>";
            echo "</td>";
            echo "</tr>";
          }
          ?>

      </table>
  </div>






  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>

</html>