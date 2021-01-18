<?php
    // Vòng lặp foreach trong php dùng để lặp các phần tử trong mảng.
    // Danh sach cac nam

    $nam = array
    (
        1990,
        1991,
        1992,
        1993,
        1994,
        1995,
        1996
    );

    // Dùng foreach xuất ra các năm trong $nam
    //  $array là mảng cần lặp,$key là số chỉ mục (mảng có chỉ mục) hoặc là key (trong mảng kết hợp), $value là giá trị của phần tử ở vị trí $key.
    foreach ($nam as $key => $value){
        echo $key . ' => ' . $value . '<br />';
    }

    echo "<br />";

    // Danh sách mã số sinh viên và sinh viên tương ứng
    $sinhvien = array(
        'SV001' => 'Nguyễn Văn A',
        'SV002' => 'Nguyễn Văn B',
        'SV003' => 'Nguyễn Văn C',
        'SV004' => 'Nguyễn Văn D',
        'SV005' => 'Nguyễn Văn E'
    );
    
    // Xuất ra danh sách sinh viên
    foreach ($sinhvien as $chimuc => $tensv){
        echo $chimuc . ' => ' . $tensv .'<br />';
    }
?>