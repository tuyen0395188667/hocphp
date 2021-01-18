<?php
    function connect_db() 
    {
        // Gọi một biến toàn cục $conn
        global $conn;

        // Mếu chưa kết nối thì két nối
        if (!$conn)
        {
            $conn = mysqli_connect('localhost', 'root', '', 'dkdn') or die ('Can not connect to database');
            // Thiết lập phông chữ kết nối
            mysqli_set_charset($conn, 'utf8');
        } 
    }

?>