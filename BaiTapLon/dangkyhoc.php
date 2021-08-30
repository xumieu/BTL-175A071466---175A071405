<?php
$conn = mysqli_connect('localhost', 'root', '', 'niit');
$sql = "select * from tbl_contact ";
$q = mysqli_query($conn, $sql);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Đăng Ký Học</title>
  </head>
  <body>
  <div class="container"> 
    <div class="content">
        <div id="page-wrapper">
            <form method="post" action="">
            <h3 id="result"></h3>
            <h2 style="color: #6495ED">Đăng Ký Học</h2>
            <p>Vui lòng điền đầy đủ thông tin, chuyên viên tư vấn của NIIT - ICT HÀ NỘI sẽ liên lạc với bạn trong vòng 24 giờ.</p>
            <div class="form-group">
                <label>Họ Tên*</label>
                <input type="text" name="hoten" class="form-control" value="">
            </div>

            <div class="form-group">
                <label>Số Điện Thoại*</label>
                <input type="text" name="sdt" class="form-control" value="">
            </div>

            <div class="form-group">
                <label>Email*</label>
                <input type="text" name="email" class="form-control" value="">
            </div>

            <div class="form-group">
                <label>Nội dung*</label>
                <input type="text" name="noidung" class="form-control" value="">
            </div>
            <button type="submit" id="submit" name="submit" class="btn btn-primary ">Gửi Thông Tin</button>
            </form>
            <?php
                if (isset($_POST["submit"])) {

                $hoten = $_POST["hoten"];
                $sdt = $_POST["sdt"];
                $email = $_POST["email"];
                $noidung = $_POST["noidung"];
                
                
                $sql = "INSERT INTO tbl_contact ( id, hoten, sdt,  email, noidung) VALUES ( '','$hoten', '$sdt', '$email', '$noidung' )";
                $result = mysqli_query($conn, $sql);

                echo "<p>Gửi thông tin thành công</p>";
                header ("location: index.php");
                }

            ?>
        </div>
    </div>

   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  </div> 
  </body>
</html>