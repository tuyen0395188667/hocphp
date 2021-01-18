<?php
    // Danh sách các hàm xử lý mảng trong PHP
    // 1. array_change_key_case($array, $case)
    // Chuyển tất cả các key trong mảng $array sang chữ hoa nếu $case = 1 và sang chữ thường nếu $case = 0. Ta có thể dùng hằng số CASE_UPPER thay cho số 1 và CASE_LOWER thay cho số 0.

    $array = array(
        'chu_thuong' => 'Hello',
        'tuyen'      => 'Hi'
    );
    $array = array_change_key_case($array, CASE_UPPER);
    var_dump($array);

    echo '<br />';

    // 2. array_combine($array_keys, $array_values)
    // Trộn 2 mảng $array_keys và $array_values thành một mảng kết hợp với $array_keys là danh sách keys, $array_value là danh sách value tương ứng với key. Điều kiện là 2 mảng này phải bằng nhau.

    $array_keys = array('a', 'b', 'c');
    $array_values = array('one', 'tow', 'three');
    print_r(array_combine($array_keys, $array_values));

    echo '<br />';

    // 3. array_count_values ( $array )
    // Đếm số lần xuất hiện của các phần tử giống nhau trong mảng $array và trả về một mảng kết quả.
        
    $array = array(1, "hello", 1, "world", "hello");
    print_r(array_count_values($array));

    echo '<br />';

    // 4. array_push(&$array, $add_value1, $add_value2, $add_value…)
    // Thêm vào cuối mảng $array một hoặc nhiều phần tử với các giá trị tương ứng biến $add_value truyền vào.

    $stack = array("orange", "banana");
    array_push($stack, "apple", "raspberry");
    print_r($stack);

    echo '<br />';

    // 5. array_pop(&$array)
    // Xóa trong mảng $array phần tử cuối cùng và trả về phần tử đã xóa.

    $stack = array("orange", "banana", "apple", "raspberry");
    $fruit = array_pop($stack);
    print_r($stack);

    echo '<br />';

    // 6. array_pad($array, $size, $value)
    // Kéo dãn mảng $array với kích thước là $size, và nếu kích thước truyền vào lớn hơn kích thước mảng $array thì giá trị $value được thêm vào, ngược lại nếu kích thước truyền vào nhỏ hơn kích thước mảng $array thì sẽ giữ nguyên. Nếu muốn giãn ở cuối mảng thì $size có giá trị dương, nếu muốn giãn ở đầu mảng thì $size có giá trị âm.

    $input = array(12, 10, 9);
    // Giãn thành 5 phần tử ở cuối mảng và
    // các phần tử giãn có giá trị là 5:
    $result = array_pad($input, 5, 0);
    // Kết quả là  array(12, 10, 9, 0, 0)
    
    // Giản thành 7 phần tử ở đầu mảng
    //  và các phần tử giãn có giá trị -1
    $result1 = array_pad($input, -7, -1);
    // Kết quả là array(-1, -1, -1, -1, 12, 10, 9)
    
    // Giãn thành 2 phần tử nhưng mảng $input
    // lại có 3 phần tử nên sẽ không được xử lý
    $result2 = array_pad($input, 5, "noop");
    // Kết quả giữ nguyên array(12, 10, 9)
    print_r($result2) ;

    echo '<br />';

    // 7. array_shift(&$array)
    // Xóa phần tử đầu tiên ra khỏi mảng $array và trả về phần tử vừa xóa đó.
    $stack = array("orange", "banana", "apple", "raspberry");
    $fruit = array_shift($stack);
    print_r($stack);

    echo '<br />';

    // 8. array_unshift(&$array, $value1, $value2, …)
    // Thêm các giá trị $value1, $value2, … vào đầu mảng $array.
    
    $queue = array("orange", "banana");
    array_unshift($queue, "apple", "raspberry");
    print_r($queue);

    echo '<br />';

    // 9. is_array($variable)
    // Kiểm tra một biến có phải kiểu mảng hay không, kết quả trả về true nếu phải và false nếu không phải.
    $bien1 = array();
    var_dump(is_array($bien1)) ;
    
    echo '<br />';

    // 10. in_array($needle, $haystackarray)
    // Kiểm tra giá trị $needle có nằm trong mảng $haystackarray không. trả về true nếu có và flase nếu không có.

    $haystackarray = array('hello', 'nobody', 'tuyen');
    // Kết quả là true
    var_dump(in_array('freetuts.net', $haystackarray));
    
    // Kết quả là false
    var_dump(in_array('net', $haystackarray));

    echo '<br />';

    // 11. array_key_exists($key, $searcharray)
    // Kiểm tra key $key có tồn tại trong mảng $searcharray không, trả về true nếu có và false nếu không có.

    $searcharray = array(
        'username' => 'thehalfheart',
        'email' => 'thehalfheart@gmail.com',
        'website' => 'freetuts.net'
    );
      
    // Trả về true
    var_dump(array_key_exists('username', $searcharray));
      
    // Trả về false
    var_dump(array_key_exists('otherkey', $searcharray));
    
    echo '<br />';

    // 12 .array_unique( $array )
    // Loại bỏ giá trị trùng trong mảng $array.

    $array = array('freetuts.net', 'freetuts.net');
    $result = array_unique($array);
    
    // Kết quả mảng chỉ còn 1 giá trị freetuts.net
    var_dump($result);

    echo '<br />';
    
    // 13. array_values ($array )
    // Chuyển mảng $array sang dạng mảng chỉ mục.
    $array = array(
        'username' => 'thehalfheart',
        'password' => 'somepasss'
    );
      
    var_dump(array_values($array));

?>
