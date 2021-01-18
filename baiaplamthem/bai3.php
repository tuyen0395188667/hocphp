<!-- Bài tập thực hành với mảng -->

<?php
    $authors = array(
        array(
            'name' => 'Đỗ Trọng Tuyên',
            'blog' => 'Fretuts.net',
            'position' => 'admin'
        ),
        array(
            'name' => 'Trương Phúc Hoài Minh',
            'blog' => 'freetuts.net',
            'position' => 'author'
        ),
        array(
            'name' => 'Hoàng Văn Tuyền',
            'blog' => 'freetuts.net',
            'position' => 'author'
        ),
        array(
            'name' => 'Nguyễn Tình',
            'blog' => 'freetuts.net',
            'position' => 'author'
        )
    );
    echo'<ul>';
    foreach($authors as $key => $author)
    {
       
        echo '<li>';
        echo 'Name: ' . $author['name'] . '<br/>';
        echo 'Blog: ' . $author['blog'] . '<br/>';
        echo 'position: ' . $author['position'] . '<br/>';
        // echo 'Phần tử thứ: ' . $key;
        // echo '<pre>';
        //     var_dump($author);
        // echo '</pre>';
        // echo '</li>';
    }       
    echo '</ul>';
    
    // Truy xuất đến phần tử trong mảng (Lấy tên)
    $name1 = $authors[1]['name'];
    echo $name1;

    // Thêm phần tử vào mang
        // Thông tin tá giả mới
        $new_author = array(
            'name' => 'Đặng Văn Chương',
            'blog' => 'freetuts.net',
            'position' => 'author'
        );
        
        // Thêm vào danh sách cuối mảng
        $authors[] = $new_author;
        array_push($authors, $new_author);
    
    echo '<pre>';
    print_r($authors);

    // Xóa phần tử có key = 1 ra khỏi mảng #author
    unset($authors[1]['name']);

    // Sửa đối tượng
    $authors[0]['name'] = 'Định Văn Cương';
    echo '<pre>';
    print_r($authors);

    
?>
