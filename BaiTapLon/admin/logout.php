<?php
session_start();

//Xóa toàn bộ Session
session_unset();
session_destroy();
header('location: login.php') ;
?>