<?php
    // lệnh break thường được dùng để thoát khỏi vòng lặp cho dù vòng lặp vẫn chưa kết thúc.
    for ($i = 1; $i <= 100; $i++)
    {
        echo $i . ' ';
        if ($i == 20)
        {
            break;
        }
    }

    echo '<br />';
    // Câu lệnh continue  sẽ bỏ qua những đoạn code bên dưới nó và nhảy qua vòng lặp kế tiếp (không thoát hẳn vòng lặp như lệnh break).
    for ($i = 1; $i <= 10; $i++)
    {
        if ($i == 5)
        {
            continue;
        }
        echo $i . ' ';
    }

    echo '<br />';
    // Câu lệnh die và exit dừng ngay lập tức và những đoạn code bên dưới die và exit sẽ không được thực hiện.
    echo '123';
  
    exit(); // hoặc exit();
    echo '456';

   

?>