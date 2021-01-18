<?php
    // Cấu trúc vòng lặp while
    $i = 1; // Biến dùng để lặp
    while ($i <= 10){ // Nếu $i <= 10 thì mới lặp
        echo $i . ' - '; // Xuất ra màn hình
        $i++; // Tăng biến $i lên 1
    }

    $i = 0;
    $j = 10;
    while ($i < 100 && $j > 5){
        $i++;
        $j -= 2;
        echo $i;
        echo $j;
    }

    echo "<br />";
    // Cấu trúc vòng lặp do while
    $l = 1;
    do{
        echo $l;
        $l++;
    }while ($l < 2);

    echo "<br />";
    // Xét bài toán giải cả ở 3 vòng lặp

    // Vòng lặp while và do while lồng nhau
    $i = 1;
    while ($i < 10){
        $j = $i;
        while ($j < 10)
        {
            echo $j;
            $j++;
        }
        echo '<br />';
        $i++;
    } 

    // Vòng lặp while, do while trong việc truy xuất mảng
    // Cho Danh Sách Năm
    $nam = array(
        1990,
        1991,
        1992,
        1993,
        1994,
        1995
    );
    
    // Xuất theo cách thông thường
    echo $nam[0];
    echo $nam[1];
    echo $nam[2];
    echo $nam[3];
    echo $nam[4];
    echo $nam[5];
    
    // Dùng while
    $i = 0;
    while ($i <= 5){
        echo $nam[$i];
        $i++; // Tăng biến $i
    }
    
    // Dùng do .. while
    $i = 0;
    do {
        echo $nam[$i];
        $i++;
    }while ($i <=5);
?>