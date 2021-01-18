<!-- Kết nối PHP với My SQL -->

<?php
    // Thực hiện kết nối
    $conn = mysqli_connect('localhost', 'root', '');
   

    // Kiểm tra kết nối
    if (!$conn)
    {
        die ("Kết nối thất bạn:" . mysqli_connect_error());
    }
    else {
        echo "Kết nối thành công";
    } 
?>