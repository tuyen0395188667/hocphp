<?php
    // Kết nối CSDL
    $conn = new mysqli('localhost', 'root', '', 'demo');
    
    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    } 
    
    // Lệnh update
    $sql = "UPDATE News SET content='Content updated' WHERE id=3";
    
    // Thực hiện update
    if ($conn->query($sql) === TRUE) {
        echo "update thành công";
    } else {
        echo "Update thất bại: " . $conn->error;
    }
    
    // ngắt kết nối
    $conn->close();

?>