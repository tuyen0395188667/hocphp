<?php
// Kết nối
$conn = new mysqli('localhost', 'root', '', 'demo');
 
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
 
// Câu SQL delete
$sql = "DELETE FROM News WHERE id = 31";
 
// Thực hiện câu truy vấn
if ($conn->query($sql) === TRUE) {
    echo "Xóa thành công";
} else {
    echo "Xóa thất bại: " . $conn->error;
}
 
$conn->close();
?>