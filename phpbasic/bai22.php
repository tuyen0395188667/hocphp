<?php
    // Mở một file, ta dùng dấu @ đặt trước hàm fopen
    // để phòng trường hợp đường dẫn $path ta truyền
    // vào bị sai nó sẽ không bung lỗi ra màn hình.
    // Đường dẫn $path có thể là đường dẫn tương đối
    // hoặc tuyệt đối đều được

    // 1.Mở file
    $path = 'demo.txt';
    $fp = @fopen($path, "a+");

    // if(!$fp){
    //     echo 'Mo file khong thanh cong';
    // } else {
    //     echo 'Mo file thanh cong';
    // }

    // 2. Đọc file
    if(!$fp){
        echo 'Mo file khong thanh cong';
    } else {

        // Đọc cả file
        $data = fread($fp, filesize($path));
        echo $data;
    }

?>