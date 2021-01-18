<?php
    // Kết nối
    $conn = mysqli_connect('localhost', 'root', '', 'demo');
    
    // Kiểm tra kết nối 
    if (!$conn) {
        die("Kết nối không thành công: " . mysqli_connect_error());
    }
    
    // Câu lệnh SQL
    $sql = "CREATE TABLE News (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(30) NOT NULL,
        content TEXT,
        add_date TIMESTAMP
    )";
    
    // Thực thi câu truy vấn
    if (mysqli_query($conn, $sql)) {
        echo "Tạo table thành công";
    } else {
        echo "Tạo table thất bại: " . mysqli_error($conn);
    }
    
    // Ngắt kết nối
    mysqli_close($conn);
?>