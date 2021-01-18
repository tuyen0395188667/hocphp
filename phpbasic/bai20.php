<?php
    // Các hàm xử lý chuỗi tong php
    // Dấu nhay đơn hay kép thì cần phải thêm gạch chéo
    echo "Nam nói\"Cậu ấy đang ăn tối\" ";
    echo 'Freetuts\'s a website learning online';
    echo '<br />';
    // Các hàm xử lý chuỗi hay sử dụng

        // addcslashes ($str, $char_list) Hàm này sẽ thêm dấu gạch chéo (\) đằng trước những ký tự trong chuỗi $str mà ta liệt kê ở $char_list.
        // a..z là gồm các từ từ a => z
        echo (addcslashes('freetuts.net FREETUTS.NET', 'a..z'));
        // kết quả: \f\r\e\e\t\u\t\s.\n\e\t
        
        echo '<br />';
        
        // a..zA..Z là gồm các từ từ a => z và A => Z
        echo (addcslashes('freetuts.net FREETUTS.NET', 'a..zA..Z'));

        echo '<br />';

        echo addslashes ("Freetuts's a website learning online");
        // Kết quả là Freetuts\'s a website learning online

        echo '<br />';

        echo stripslashes("Mot so ham 'xu ly chuoi' trong PHP");
        // Kết quả Mot so ham 'xu ly chuoi' trong PHP

        echo '<br />';

        // Chuỗi cần chuyển<br />
        $str = 'freetuts.net is a website free for you';
        
        // Mỗi khoảng trắng sẽ là một phần tử trong mảng<br />
        echo '<pre>';
        var_dump(explode(' ', $str));
        
        /*Kết quả
        array
            0 => 'freetuts.net',
            1 => 'is',
            2 => 'a' ,
            3 => 'website',
            4 => 'free',
            5 => 'for' ,
            6 => 'you' */

        echo '<br />';

        echo strlen('freetuts.net');
        // kết quả: 12

        echo '<br />';

        echo str_word_count('freetuts xin chao cac ban');
        // kết quả là 5

        

?>