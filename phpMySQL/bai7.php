<!-- Insert nhiều record vào MySQL bằng php -->

<?php
    // Kết nối
    $conn = new mysqli('localhost', 'root', '', 'demo');
    
    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    } 
    
    // Câu lệnh SQL
    $sql = "INSERT INTO News (title, content) 
            VALUES ('tieu de 1', 'noi dung 1');";
    $sql .= "INSERT INTO News (title, content) 
            VALUES ('tieu de 2', 'noi dung 2');";
    
    // Thực thi câu lệnh
    if ($conn->multi_query($sql) === TRUE) {
        echo "Thêm thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
    
    // Ngắt kết nối
    $conn->close();
?>