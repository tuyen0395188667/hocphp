<?php
    // tao ket noi
    $conn = mysqli_connect('localhost', 'root', '', 'demo');

    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

    // Sql Insert
    $sql = "INSERT INTO News (title, content)
            VALUES ('tieu de', 'noi dung')";

    // Thực hiện thêm record
    if (mysqli_query($conn, $sql)) {
        echo "Thêm record thành công";
    } else {
        echo "Lỗi:" .$qql . "<br />" . mysqli_error($conn);
    }

    // Ngắt kết nối
    mysqli_close($conn);
?>