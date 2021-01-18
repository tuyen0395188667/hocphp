<!-- Xử lý ngày tháng trong php -->

<?php
    // 1. Thiết lập time_zone tại Việt Nam
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    // Xem danh sách time_zone
    $timezone = DateTimeZone::listIdentifiers();
    foreach ($timezone as $key => $item){
        // echo $key . ' => ' . $item .'<br />';
    }

    // 2. ĐỊnh dạng ngày tháng với hàm date() trong PHP
    echo date('d/m/Y - H:i:s');

    echo '<br />';

    // 3. Xử lý ngày tháng nâng cao

    // Truyền chuỗi vào định dang format
    echo date('\B\â\y \g\i\ờ \l\à H \g\i\ờ');

    echo '<br />';

    // Chuyển đổi thời gian sang kiểu INT
    echo strtotime(date('Y-m-d H:i:s'));

    echo '<br />';

    // Xử lý cộng trừ ngày tháng với hàm mktime()
    $dateint = mktime(0, 0, 0, 11, (20 + 12), 2016);
    echo date('d/m/Y', $dateint); // 02/12/2016
?>