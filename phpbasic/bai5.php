<?php 

    // Câu lệnh if
    $so_can_kiem_tra = 12;
    $so_du = $so_can_kiem_tra % 2;
    if ($so_du == 0) {
        // Toán tử dấu chấm . dùng để nối hai chuỗi lại với nhau.
        echo 'Số '.$so_can_kiem_tra.' là số chẵn';
    }

    echo "<br />";

    $nam = 1992;
    $kiem_tra = ($nam % 4 == 0 || $nam % 400 == 0 && $nam % 100 != 0);
    if ($kiem_tra == true) {
        echo 'Năm '.$nam.' là năm nhuận';
    }

    echo "<br />";

    // Câu lệnh if else
    $nam = 2015;
    $so_du = $nam % 2;
    if ($so_du == 0){
        echo 'Năm ' . $nam . ' Là Năm Chẵn';
    }
    else{
        echo 'Năm ' . $nam . ' Là Năm Lẻ';
    }

    echo "<br />";

    // Kết hợp nhiều lệnh if else
    $mau = 'màu den';
  
    if ($mau == 'màu xanh'){
        echo 'Đây là màu xanh';
    }
    else if ($mau == 'màu đỏ')
    {
        echo "Đây là màu đỏ";
    }
    else if ($mau == 'màu vàng'){
        echo 'Đây là màu vàng';
    }
    else{
        echo 'Các màu khác';
    }

    echo "<br />";

    // Câu lệnh if else lồng nhau
    $so = 120; // Nhập vào số 80
    if ($so % 2 == 0) // Nếu số dư khi chia cho 2 = o, tức là số chẵn ta sẽ chạy tiếp câu lệnh bên trong
    {
        if ($so > 100){ // Nếu số lớn hơn 100 thì chạy lệnh bên trong
            echo 'Số chẵn và lớn hơn 100';
        }
        else if ($so < 100){ // Ngược lại nếu số nhỏ hơn 100 thì chạy lệnh bên trong
            echo 'Số chẵn và nhỏ hơn 100';
        }
    }
?>