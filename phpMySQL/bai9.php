<!-- Select dữ liệu MYSQL bằng PHP -->

<?php
    // Kết nối CSDL 
    $conn = new mysqli('localhost', 'root', '', 'demo');
    
    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    } 
    
    // Câu SQL lấy danh sách
    $sql = "SELECT id, title, content FROM News";
    
    // Thực thi câu truy vấn thông qua đối tượng $conn và gán vào $result
    $result = $conn -> query($sql); // = mysqli_query($conn, $sql);
    echo '<pre>';
    print_r($result);
    // Kiểm tra số lượng record trả về có lơn hơn 0
    // Kiển tra thuộc tính num_rows của đồi tượng $result
    // Nếu lớn hơn tức là có kết quả, ngược lại sẽ không có kết quả
    if ($result ->num_rows > 0) 
    {
        // Sử dụng vòng lặp while để lặp kết quả
        while($row = $result->fetch_assoc()) {
            // echo "title: " . $row["title"]. " - Content: " . $row["content"]."<br>";
        }
    } 
    else {
        echo "Không có record nào";
    }
    
    // ngắt kết nối
    $conn->close();
?>