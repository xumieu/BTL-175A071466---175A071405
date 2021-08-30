<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','niit');
    $id = $_GET["id"];

   
        $query = "DELETE FROM tbl_khoahoc WHERE Id=$id";
        $result = mysqli_query($conn, $query);
        echo "<p>Đã Xóa Khóa Học Thành Công</p>";
        header ("location: dskhoahoc.php");
    
?>