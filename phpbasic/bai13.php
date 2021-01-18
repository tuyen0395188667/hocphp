<?php
    // Thuật toán sắp xếp nổi bọt tăng dần trong php
    $mang = array(1, 5, 9, 2, 4, 9); // mảng theo đề bài
    $sophantu = 6; // hoặc dùng hàm $sophantu = count($mang);
    // Sắp xếp mảng
    for ($i = 0; $i < ($sophantu - 1); $i++)
    {
        for ($j = $i + 1; $j < $sophantu; $j++) // lặp các phần tử phía sau
        {
            if ($mang[$i] > $mang[$j]) // nếu phần tử $i bé hơn phần tử phía sau
            {
                // hoán vị
                $tmp = $mang[$j];
                $mang[$j] = $mang[$i];
                $mang[$i] = $tmp;
            }
        }
        
    }
    // Hiển thị các phần tử của mảng đã sắp xếp
    for ($i = 0; $i < $sophantu; $i++){
        echo $mang[$i] . ' ';
    }

    echo '<br />';

    // Thuật toán nổi bọt giảm dần
    $mang = array(1, 5, 9, 2, 4, 9); // mảng theo đề bài
    $sophantu = 6; // hoặc dùng hàm $sophantu = count($mang);
    // Sắp xếp mảng
    for ($i = 0; $i < ($sophantu - 1); $i++)
    {
        for ($j = $i + 1; $j < $sophantu; $j++) // lặp các phần tử phía sau
        {
            if ($mang[$i] < $mang[$j]) // nếu phần tử $i bé hơn phần tử phía sau
            {
                // hoán vị
                $tmp = $mang[$j];
                $mang[$j] = $mang[$i];
                $mang[$i] = $tmp;
            }
        }
    }
    print_r ($mang);
    // Hiển thị các phần tử của mảng đã sắp xếp
    for ($i = 0; $i < $sophantu; $i++){
        echo $mang[$i] . ' ';
    }
    
    echo '<br />';

    // Đưa thuật toán sắp xếp nổi bọt vào hàm
    // Ham sắp xếp
    function sap_xep_tang($mang)
    {
        $sophantu = count($mang);
        // Sắp xếp mảng
        for ($i = 0; $i < ($sophantu - 1); $i++)
        {
            for ($j = $i + 1; $j < $sophantu; $j++)
            {
                if ($mang[$i] > $mang[$j])
                {
                    // hoán vị
                    $tmp = $mang[$j];
                    $mang[$j] = $mang[$i];
                    $mang[$i] = $tmp;
                }
            }
        }
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
    $mang = sap_xep_tang($mang);
    
    // xuất ra màn hình
    xuat_mang_ra_man_hinh($mang);

?>