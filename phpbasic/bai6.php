<?php
    // Câu lệnh switch trong php
    $number = 4;
    switch ($number)
    {
        case 0 :
            echo 'Số không';
            break;
        case 1 :
            echo 'Số một';
            break;
        case 2 :
            echo 'Số hai';
            break;
        case 3 :
            echo 'Số ba';
            break;
        case 4 :
            echo 'Số bốn';
            break;
        default:
            echo 'Không tìm thấy';
            break;
    }

    // Switch và if
    $number = 10;
    if ($number == 0){
        echo 'Số không';
    }
    else if ($number == 1){
        echo 'Số một';
    }
    else if ($number == 2){
        echo 'Số hai';
    }
    else if ($number == 3){
        echo 'Số ba';
    }
    else if ($number == 4){
        echo 'Số bốn';
    }
    else {
        echo 'Không tìm thấy';   
    }

    // Switch lồng nhau
    $number = 13;
    $midle = null;
    switch ($number)
    {
        case 13 : // nếu $number = 12
            $midle = $number % 2; // lấy số dư
            switch ($midle)
            {
                case 0 : // nếu số dư = 0
                    echo 'Số chẵn';
                    break;
                default :
                    echo 'Số lẻ';
                    break;
            }
            break;
        default: // nếu không phải 12 thì không làm gì
            echo 'Không phải số 13 thấy';
            break;
    }
?>