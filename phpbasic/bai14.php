<?php
    // Tìm kiếm tuyến tính

    // hàm kiểm tra
    function kiem_tra($mang, $can_tim)
    {
        for ($i = 0; $i < count($mang); $i++){ // duyệt qua từng phần tử của mảng
            if ($mang[$i] == $can_tim){ // và so sánh xem có bằng số 67 không, nếu có thì xuất ra màn hình
                return true; // và không cần làm gì trong hàm này nữa, trả về là đúng luôn
            }
        }
        return false; // sau khi lặp hết mà ko có thì return về false
    }
    
    // ---------------------- chương trình chính
    // Cho mảng
    $mang = array(321,312,3,4,5,45,56,5,7,6,787,8,7,2, 67);
    
    // biến cần tìm
    $can_tim = 67;
    
    // gọi hàm và xuất kết quả
    if (kiem_tra($mang, $can_tim)){
        echo 'Số ' . $can_tim . ' có nằm trong mảng';
    }

    // Tìm các số chia hết cho 3
    // Hàm tìm các số chia hết cho 3
    function tim_so_chia_het_cho_3($mang)
    {
        for ($i = 0; $i < count($mang); $i++){
            if ($mang[$i] % 3 == 0){
                echo $mang[$i];
            }
        }
        // foreach ($mang as $key => $val){
        //     if ($val % 3 == 0){
        //         echo 'Ví trí thứ ' . $key . '<br/>';
        //     }
        // }
    }
    
    // Chương trình chính
    //-----------------------------------------------
    // Lặp từ 1 đến 100 để gán giá trị vào mảng
    $mang = array(3, 7, 9, 12);
    // for ($i = 1; $i <= 100; $i++){
    //     $mang[$i] = $i;
    // }
    
    // Gọi hàm để xuất ra vị trí chia hết cho 3
    tim_so_chia_het_cho_3($mang);

?>