<!-- Cơ chế prepared câu SQL trong php -->

<?php

    // Kết nối
    $conn = new mysqli('localhost', 'root', '', 'demo');
    
    // kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    } 
    
    // Câu SQL
    $sql = "INSERT INTO News (title, content) VALUES (?, ?)";
    
    // Tạo đối tượng repared
    $stmt = $conn->prepare($sql);
    
    // Gán giá trị vào các tham số ẩn
    $stmt->bind_param("ss", $title, $content);
    
    // Thực thi câu truy vấn lần 1
    $title = 'Tiêu đề 1';
    $content = 'Nội dung 1';
    $stmt->execute();
    
    // Thực thi câu truy vấn lần 2
    $title = 'Tiêu đề 2';
    $content = 'Nội dung 2';
    // Thực thi câu truy vấn
    $stmt->execute();
    
    echo "Thêm thành công!";

    // Giải phóng và ngắt kết nối
    $stmt->close();
    $conn->close();    
?>