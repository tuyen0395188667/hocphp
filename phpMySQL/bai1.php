<?php
    // BƯỚC 1: KẾT NỐI
    $conn = mysqli_connect('localhost', 'root', 'vertrigo', 'demo') 
    or die ('Không thể kết nối tới database');
    
    // BƯỚC 2: TẠO CÂU TRUY VẤN
    $sql = 'SELECT * FROM SinhVien';
    
    // BƯỚC 3: YÊU CẦU THỰC THI CÂU TRUY VẤN
    $result = mysqli_query($conn, $sql);
    
    // BƯỚC 4: XỬ LÝ KẾT QUẢ MYSQL TRẢ VỀ
    while ($row = mysqli_fetch_assoc($result)){
        var_dump($row);
    }
?>