<?php
    
    // Khai bao kieu du lieu int
    $tuoi = 12; // biến $tuoi là kiểu INT có giá trị = 12

    // Ép dữ liệu sang kiểu INT
        // (int)$ten_bien;
        $tuoi = '98'; // biến tuổi là một chuỗi có giá trị bằng '98'
        $tuoi = (int)$tuoi; // lúc này biến $tuoi là một kiểu int có giá trị 98

    $a = '123';  // Biến $a là kiểu chuỗi có giá trị bằng '123'
    $b = 123; // Biến $b là kiểu INT có giá trị bằng 123
    $c = $a + $b; // Biến C là kết quả của phép toán $a + $b và sẽ có giá trị là 246 nên nó là kiểu INT
    var_dump(is_int($c)); // hàm is_int($tenbien) dùng để kiểm tra một biến có phải là kiểu INT hay không
    var_dump(is_int($a)); // kết quả là false vì biến $a là kiểu string
    var_dump(is_int($b));

    $a = 'a123'; // biến $a có giá trị là chuỗi 'a123'
    $a = (int)$a; // chuyển $a sang kiểu INT
    echo $a; // kết quả xuất ra màn hình là số 0 do a khong phai la dang so

    $a = '123a'; // biến $a có giá trị là chuỗi '123a'
    $a = (int)$a; // chuyển $a sang kiểu INT
    echo $a; // kết quả xuất ra màn hình là số 123
    
    // Kiểm tra dữ liệu có phải kiểu INT
    $x = 'a123';
    $y = "123";
    var_dump(is_int($x));
    var_dump(is_integer($y));

    echo "<br/>";
    
    // Kiểu dữ liệu boolean
    $is_admin = false; // biến $admin là kiểu boolean có gái trị là false
    
    // Ép dữ liệu sang kiểu boolean
    $bool = 1; // biến $bool là kiểu int
    $bool = (bool)$bool; // lúc này biến $bool sẽ có kiểu boolean
    // Hoặc
    $bool = (boolean)$bool; // lúc này biến $bool sẽ có kiểu boolean
     $a = 123; // TRUE
     $b = 0; // FALSE
     $c = '0'; // FALSE
     $d = 'a123b'; // TRUE
     $e = null; // FALSE
     $f = ''; // FALSE
     var_dump(is_bool($a));

     echo "<br/>";

    //  3. Kiểu số thực
    $a = 123; // biến $a kiểu int
    $a = (float)$a; // Biến $a lúc này kiểu số thực (float)
    $a = (double)$a; // Biến $a lúc này kiểu ố thực (double)
    $g = 1; // Kiểu số thực
    var_dump(is_float($g));


    echo "<br/>";
    
    // 4. Kiểu chuỗi
    $a = 123; // khai báo biến $a kiểu int có giá trị 123
    $a = (string)$a; //Chuyển biến $a thành kiểu chuỗi và có giá trị là '123'

    echo "<br/>";

    // 5. Kiểu mảng(array)
    // Khởi tạo và truy xuất các phần tử trong mảng

    // Cách 1:
    $sinhvien = array('Nguyễn Văn A', 'Nguyễn Văn B');
    print_r($sinhvien);

    echo "<br />";
    // Cách 2:
    $sinhvien = array(
        0 => 'Nguyễn Văn A',
        1 => 'Nguyễn Văn B'
        );
        print_r($sinhvien);

    echo "<br />";
    // Cách 3:
    $sinhvien = array();
    $sinhvien[0] = 'Nguyễn Văn A';
    $sinhvien[1] = 'Nguyễn Văn B';
    print_r($sinhvien);

    echo "<br />";
    $sinhvien = array();
    $sinhvien[] = 'Nguyễn Văn A';
    $sinhvien[] = 'Nguyễn Văn B';
    print_r($sinhvien);

    // Truy xuất phần tử mảng
    echo "<br />";
    echo $sinhvien[0]; // Xuất ra màn hình phần tử 0 => Nguyễn Văn A
 
    echo "<br />";
    // Mảng kết hợp
    $sinhvien = array();
    $sinhvien['sinhvien_a'] = 'Nguyễn Văn A';
    $sinhvien['sinhvien_b'] = 'Nguyễn Văn B';
    print_r($sinhvien);
    echo "<br />";   
    echo $sinhvien['sinhvien_a']; // xuất ra màn hình sinh viên Nguyễn Văn A
    echo $sinhvien['sinhvien_b']; // xuất ra màn hình sinh viên Nguyễn Văn B

    $a = array();
    $a[0][1] = 123;
    $a[0][2] = 321;
    echo $a[0][1]; // in ra giá trị 123
    echo $a[0][2]; // in ra giá trị 321
    var_dump(is_array($a));

    echo "<br />";

    // Kiểu giá trị Null
    $a = null; // Khởi tạo biến $a và gán giá trị null
    $b = (int)$a; // Biến $b có giá trị là ( 0 )
    $c = (string)$a; // Biến $c có giá trị rỗng ( '' )
    $d = (bool)$a; // Biến $d có giá trị FALSE
    var_dump(is_null($a));

?>