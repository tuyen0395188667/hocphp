<!-- Lấy ID vừa insert bằng PHP -->

<?php
   // Tạo kết nối
    $conn = new mysqli('localhost', 'root', '', 'demo');

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    } 
    
    // Câu SQL Insert
    $sql = "INSERT INTO News (title, content) 
            VALUES ('tieu de', 'noi dung')";
    
    // Thực hiện thêm record
    if ($conn->query($sql) == TRUE) {
        $last_id = $conn->insert_id;
        echo "Thêm record thành công có ID là $last_id";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
    
    // Ngắt kết nối
    $conn->close();
?>