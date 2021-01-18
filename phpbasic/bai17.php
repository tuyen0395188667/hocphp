<?php
    function SelectionSortAscending($mang)
    {
        // Đếm tổng số phần tử của mảng
        $sophantu = count($mang);
      
        // Lặp để sắp xếp
        for ($i = 0; $i < $sophantu - 1; $i++)
        {
            // Tìm vị trí phần tử nhỏ nhất
            $min = $i;
            for ($j = $i + 1; $j < $sophantu; $j++){
                if ($mang[$j] < $mang[$min]){
                    $min = $j;
                }
            }
      
            // Sau khi có vị trí nhỏ nhất thì hoán vị
            // với vị trí thứ $i
            $temp = $mang[$i];
            $mang[$i] = $mang[$min];
            $mang[$min] = $temp;
        }
      
        // Trả về mảng đã sắp xếp
        return $mang;
    }
     // Hàm xuất ra màn hình
     function xuat_mang_ra_man_hinh($mang)
     {
         $sophantu = count($mang);
         for ($i = 0; $i < $sophantu; $i++){
             echo $mang[$i] . ' ';
         }
     }
     
     //--------------------------------------------------
     // Chương trình chính
     $mang = array(1, 5, 9, 2, 4, 9); // mảng theo đề bài
     
     // sắp xếp
     $mang = SelectionSortAscending($mang);
     
     // xuất ra màn hình
     xuat_mang_ra_man_hinh($mang); 
?>