<?php
$conn = mysqli_connect('localhost', 'root', '', 'niit');
$sql = "select *  from tbl_contact ";
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
      <h2 style="color: #08298A;">Danh sách Contact</h2>
      <table class="table">
        <thead class="text-primary ">
          <tr>
            <th>Id</th>
            <th>Họ tên</th>           
            <th>Số Điện Thoại</th>
            <th>Email</th>
            <th>Nội dung</th>                    
          </tr>
        </thead>
        </td>
        </tr>
          <?php
          while ($row = mysqli_fetch_array($q)) {

            echo "<tr>";
            echo "<td>" . $row['Id'] . "</td>";
            echo "<td>" . $row['hoten'] . "</td>";           
            echo "<td>" . $row['sdt'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['noidung'] . "</td>";

          }
          ?>

      </table>
  </div>






  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>

</html>