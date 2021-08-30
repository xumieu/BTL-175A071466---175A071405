<?php
$conn = mysqli_connect('localhost', 'root', '', 'niit');
$sql = "select * from tbl_tintuc where postid";
$q = mysqli_query($conn, $sql);

?>
<?php
  include ('header.php');
?>

  <!--           SLIDESHOW      -->
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slide1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slider_2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slide3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--          KẾT THÚC SLIDESHOW         -->
  <br>
  <!--           KHÓA HỌC NỔI BẬT     -->

  <div class="container">
    <div class="heading1">
      <h3> KHÓA HỌC NỔI BẬT </h3>
      <p>Với chúng tôi, việc học không chỉ dừng lại ở việc trang bị kiến thức mà còn là môi trường trau dồi kỹ năng sống và giúp bạn kết nối thế giới bằng phương pháp hoàn toàn mới chỉ có tại NIIT - ICT HÀ NỘI.</p>
      <span>****</span>
    </div>
    <div class="heading2">
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php
            $conn = mysqli_connect('localhost','root','','niit','3306');
            if(!$conn){
                die("Không thể kết nối");
            }
            $sql    = "SELECT * FROM tbl_khoahoc LIMIT 8";
            $result = mysqli_query($conn,$sql);
            //Bước 03: Xử lý Dữ liệu trả về
            if(mysqli_num_rows($result) > 0){
              //Lặp để lấy về từng bản ghi thông qua phương thức: mysqli_fetch_assoc
              while($row = mysqli_fetch_assoc($result)){
        ?>
            <div class="col">
              <div class="card">
                <img src="<?php echo $row['hinhanh'];?>" class="card-img-top" alt="LaptrinhWeb">
                  <div class="card-body">
                  <h5> <a href="khoahoc.php" class="card-title" style="text-decoration:none"><?php echo $row['tenkhoahoc'];?></a></h5>
                </div>
              </div>
            </div>
          <?php                      
              }
          }                                      
              //Bước 04: Đóng kết nối
                mysqli_close($conn);
          ?>               
    </div>
  </div>

  <!--         KẾT THÚC KHÓA HỌC NỔI BẬT          -->
  <br>
  <!--           LỊCH KHAI GIẢNG     -->

  <div class="lichhoc">
    <div class="container">
      <div class="row">
        <div class="ct_heading_1_wrap">
          <h3>LỊCH KHAI GIẢNG</h3>
          <P></P>
          <span>****</span>
        </div>
        <div class="title col-md-12 col-sm-12 col-xs-12 hidden-xs">
          <div class="item">
            <div class="item1 col-md-5 col-sm-4">Khóa học</div>
            <div class="item1 col-md-1 col-sm-2">Khai giảng</div>
            <div class="item1 col-md-1 col-sm-2">Thời lượng</div>
            <div class="item1 col-md-2 col-sm-2">Thời gian</div>
            <div class="item1  col-md-3 col-sm-2">Lịch học</div>
          </div>
        </div>
        <?php
            $conn = mysqli_connect('localhost','root','','niit','3306');
            if(!$conn){
                die("Không thể kết nối");
            }
            $sql    = "SELECT * FROM tbl_khoahoc LIMIT 8";
            $result = mysqli_query($conn,$sql);
            //Bước 03: Xử lý Dữ liệu trả về
            if(mysqli_num_rows($result) > 0){
              //Lặp để lấy về từng bản ghi thông qua phương thức: mysqli_fetch_assoc
              while($row = mysqli_fetch_assoc($result)){
        ?>
          <div class="content col-md-12 col-sm-12 col-xs-12 ">
            <div class="item ">
              <div class="item1 col-md-5 col-sm-4"> <a href="#" style=" text-decoration:none"><?php echo $row['tenkhoahoc'];?></a></div>
              <div class="item1 col-md-1 col-sm-2"><?php echo $row['ngaykhaigiang'];?></div>
              <div class="item1 col-md-1 col-sm-2"><?php echo $row['thoiluong'];?> </div>
              <div class="item1 col-md-2 col-sm-2"><?php echo $row['thoigian'];?> </div>
              <div class="item1  col-md-3 col-sm-2"><?php echo $row['lichhoc'];?> </div>
            </div>
          </div>
        <?php                      
              }
          }                                      
              //Bước 04: Đóng kết nối
                mysqli_close($conn);
          ?>               
      </div>
      <br>
    </div>
  </div>
  <br>  

  <!--          KẾT THÚC LỊCH KHAI GIẢNG         -->
  <br>
  <!--          GIỚI THIỆU      -->
  <div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="get-started">
            <h3>HỌC VIỆN ĐÀO TẠO CNTT NIIT - ICT HÀ NỘI</h3>
            <p>Tiền thân là Trung tâm Tin học Công nghệ được thành lập ngày 11 tháng 6 năm 2002. NIIT - ICT HÀ NỘI có sứ
              mệnh đào tạo nguồn nhân lực CNTT phục vụ cho sự nghiệp Công nghiệp hóa - Hiện đại hóa của Việt Nam, hợp
              tác
              với đối tác trong và ngoài nước về đào tạo CNTT theo chuẩn doanh nghiệp và cung cấp nhân lực cho các doanh
              nghiệp công nghệ</p>
            <p>Trụ sở chính của Học viện hiện nay ở Hà Nội tại Tầng 3 – tòa nhà 25T2 – Đường Nguyễn Thị Thập – Quận Cầu
              Giấy – Hà Nội, một vị trí khá thuận tiện bởi khuôn viên rộng rãi, gần các trường Đại học, Cao đẳng... của
              Hà
              Nội.</p>
            <ul class="gioithieu">
              <li>- Communication - Kỹ năng giao tiếp </li> <br>
              <li>- Collaboration - Kỹ năng hợp tác</li> <br>
              <li>- Creativity - Khả năng sáng tạo</li> <br>
              <li>- Critical thinking - Tư duy phản biện</li> <br>
              <li>- Digital literacy - Kiến thức công nghệ</li>
            </ul>
          </div>
        </div>

        <div class="col-md-6">
          <div class="img2">
            <img src="img/gioithieu_niic.jpg" alt="gioithieu" width="630px" height="530px">
          </div>
        </div>
      </div>
    </div>

    <!--          KẾT THÚC GIỚI THIỆU        -->
    <br>
    <!--           GIẢNG VIÊN, CHƯƠNG TRÌNH    -->
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <div class="get_started_services">
            <div class="get_icon_des">
              <i class="fa fa-group" style="font-size: 40px; color: #cc3333;"></i>
              <h5>VỀ GIẢNG VIÊN</h5>
              <p>Giảng viên là các CEO, Giám Đốc Công nghệ, Trưởng phòng công nghệ, Senior Developer, Team leader đến từ
                các doanh nghiệp là đối tác tuyển dụng...</p>
            </div>
            <a href="#" style="color: #cc3333; text-decoration: none;"> Xem thêm</a>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="get_started_services">
            <div class=" get_icon_des">
              <i class="fa fa-leanpub" style="font-size: 40px; color: #cc3333;"></i>
              <h5>VỀ CHƯƠNG TRÌNH HỌC</h5>
              <p>Chương trình học bám sát nhu cầu tuyển dụng. Tính thực tiễn, phù hợp là yếu tố chúng tôi chúng tôi quan
                tâm hàng đầu</p>
              <a href="#" style="color: #cc3333; text-decoration: none;"> Xem thêm</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="get_started_services">
            <div class="get_icon_des">
              <i class="fa fa-television" style="font-size: 40px; color: #cc3333;"></i>
              <h5>VỀ CƠ SỞ VẬT CHẤT</h5>
              <p>Cơ sở vật chất đáp ứng đầy đủ nhu cầu học tập. Phòng học máy tính chuẩn quốc tế, khuôn viên rộng rãi.
              </p>
              <a href="#" style="color: #cc3333; text-decoration: none;"> Xem thêm</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--         KẾT THÚC GIẢNG VIÊN, CHƯƠNG TRÌNH        -->
    <br>
    <!--           TIN TỨC SỰ KIỆN      -->
    <section>
      <div class="container">
        <div class="heading1">
          <h3> TIN TỨC VÀ SỰ KIỆN </h3>
          <span>****</span>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
            <?php
            $row=mysqli_fetch_array($q); 
         
            echo"  <img src='img/tintuc_sukien_KhaiGiang.jpg' ".$row['hinhanh']."'>";
              
            echo"<div class='card-body'>" ;
            echo"<a href='#' style='text-decoration: none;' >" ;  
            echo"<h5 class='card-title' name = 'title'>" . $row['tieude'] ."</h5>" ;  
            echo"</a>" ; 
            echo"<p class='card-text' name =' import'>". $row['mota'] . "</p>";  
                
             echo"</div>" ;

            ?>
        </div>
          </div>
          <div class="col">
            <div class="card h-100">
            <?php
              $row=mysqli_fetch_array($q); 
         
              echo"  <img src='img/tintuc_sukien_Laptrinhweb.jpg' ".$row['hinhanh']."'>";
              
              echo"<div class='card-body'>" ;
              echo"<a href='#' style='text-decoration: none;' >" ;  
              echo"<h5 class='card-title' name = 'title'>" . $row['tieude'] ."</h5>" ;  
              echo"</a>" ; 
              echo"<p class='card-text' name =' import'>". $row['mota'] . "</p>";  
                
              echo"</div>" ;
              ?>

            </div>
          </div>
          <div class="col">
            <div class="card h-100">
            <?php
          $row=mysqli_fetch_array($q); 
         
            echo"  <img src='img/tintuc_sukien_Tester.jpg' ".$row['hinhanh']."'>";
              
             echo"<div class='card-body'>" ;
             echo"<a href='#' style='text-decoration: none;' >" ;  
             echo"<h5 class='card-title' name = 'title'>" . $row['tieude'] ."</h5>" ;  
              echo"</a>" ; 
              echo"<p class='card-text' name =' import'>". $row['mota'] . "</p>";  
                
             echo"</div>" ;

        ?>
            </div>
          </div>
        </div>
        

      </div>
    </section>
    <!--         KẾT THÚC TIN TỨC SỰ KIỆN          -->
    <br>
    <!--           ĐĂNG KÝ TƯ VẤN   -->
    <section style="background-color: #add8e6">
      <div class="page-intro-regiser" style="text-align: center;">
        <button class="consultant-register-button" type="submit">
          <a href="dangkyhoc.php" class="fa fa-check-square-o">Đăng ký tư vấn</a>
        </button>
      </div>
    </section>

    <!--         KẾT THÚC ĐĂNG KÝ TƯ VẤN        -->
    <br>
    <!--         HỌC BỔNG      -->

    <div>
      <div class="newletter_des">
        <i class="bi bi-envelope"></i>
        <h5>NHẬN NGAY THÔNG TIN HỌC BỔNG MỚI NHẤT!!!</h5>
        <form action="">
          <input type="search" name="search" placeholder=" Nhập email của bạn">
        </form>
      </div>
    </div>

    <!--          KẾT THÚC HỌC BỔNG       -->
    <br>
    <?php
      include ('footer.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>