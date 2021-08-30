<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','niit');
    $id = $_GET["id"];

   
        $query = "DELETE FROM tbl_tintuc WHERE postid=$id";
        $result = mysqli_query($conn, $query);
        echo "<p>Đã Xóa Bài Viết Thành Công</p>";
        header ("location: dsbaiviet.php");
    
?>