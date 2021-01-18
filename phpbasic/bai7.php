<?php
    $i = 0;
    for ($i; $i < 10; $i++){
        echo $i . ' - ';
    }

    echo "<br/>";

    // Vòng for lồng nhau
    for ($i = 1; $i < 10; $i++)
    {
        for ($j = $i + 1; $j < 10 ; $j++)
        {
            echo $j;
        }
    echo '<br/>';
    }

    // Vòng lặp for kết hợp mảng
    $sinhvien = array(
        'Nguyễn A',
        'Nguyễn B',
        'Nguyễn C',
        'Nguyễn D',
        'Nguyễn E',
        'Nguyễn F'
    );
    $count = count($sinhvien);
    for ($i = 0; $i < $count; $i++){
        echo $sinhvien[$i].'<br />';
    }
?>