<?php 
session_start(); 
 
if (isset($_SESSION['user'])){
    unset($_SESSION['user']); // xóa session theo tên
    header("location: index.php");

    // Xóa hết tất ca session
    // session_destroy();
}
?>