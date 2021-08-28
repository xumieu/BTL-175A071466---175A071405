<?php
$conn = mysqli_connect('localhost', 'root', '', 'niit');
$sql = "select * from posts  ";
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
      <a href="#"><img src="image/logo.png" alt=""></a>
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
      <a class="" href="../index.php" style="color: white;  "> <b>QUẢN TRỊ TRƯỜNG NIIT-ICT HÀ NỘI</b> </a>

    </div>
  </div>

  <div class="content">
    <div class="content-left">
      <ul>
        <li class="nav-item1">
          <a href="../index.php">
            <i class="fa fa-home"> Trang chủ </i>
          </a>

        </li>
        <hr>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-list"> Quản trị danh mục</i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="../admin/thembaiviet.php">Thêm bài viết</a>
            <a class="dropdown-item" href="../admin/dsbaiviet.php">Danh sách bài viết</a>
          </div>
        </li>
        <hr>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-image"> Quản trị giao diện</i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item  " href="image.php"> Hình ảnh</a>
            <a class="dropdown-item" href="#">Hỗ trợ trực tuyến</a>
          </div>
        </li>
        <hr>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-users"> User</i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="../admin/quanlyuser.php">Quản lý user</a>
            <a class="dropdown-item" href="#">Danh sách quyền</a>
          </div>
        </li>
      </ul>

    </div>
    <div class="content-right">
      <div id="page-wrapper">
        <form method="post" action="">
          <h3 id="result"></h3>
          <h2 style="color: #6495ED">Chỉnh sửa bài viết</h2>

          <div class="form-group">
            <label>Tiêu đề bài viết</label>
            <input type="text" name="title" class="form-control" >
          </div>

          <div class="form-group">
            <label>Ảnh</label><br>
            <input type="file" name="image" >
          </div>

          <div class="form-group">
            <label>Nội dung</label>
            <textarea name="import" class="form-control" style="height: 150px;" ></textarea>
          </div>


          <div class="form-group">
            <label>Người viết</label>
            <input type="text" name="writer" class="form-control" value="">
          </div>

          <button type="submit" id="submit" name="submit" class="btn btn-primary ">Cập nhật</button>
        </form>

        <?php
        if (isset($_POST["submit"])) {

          $title = $_POST["title"];
          $image = $_POST["image"];
          $import = $_POST["import"];
          $writer = $_POST["writer"];
          
          $query2 = "UPDATE posts SET title = '$title', image = '$image', import = '$import' ,writer='$writer'  WHERE postid=$id";
           mysqli_query($conn, $query2);

          // echo "Bài viết đã thêm thành công";
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