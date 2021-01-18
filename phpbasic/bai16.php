<?php
    // Khai báo cờ và gán cho cờ có giá trị là không tìm thấy
    $flag = true;
    
    // duyệt qua từng số
    for ($i = 1; $i <= 1000; $i++){
        if ($i % 40 == 0){
            $flag = true;
        }
    }
    
    if ($flag == true){
        echo 'Có';
    }
    else {
        echo 'Không';
    }
?>