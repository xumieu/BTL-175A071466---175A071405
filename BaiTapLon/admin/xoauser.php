<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','niit');
    $id = $_GET["id"];

    if (isset($_SESSION["ID"])) {
        if ($_SESSION["ID"] == $id) {
            header ("location: quanlyuser.php");
            return;
        }
        $query = "DELETE FROM tbl_user WHERE ID=$id";
        $result = mysqli_query($conn, $query);
        echo "<p>Đã Xóa User Thành Công</p>";
        header ("location: quanlyuser.php");
    } else {
        echo "Không có session";
    }
?>