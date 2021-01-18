
<!-- require và include -->
<?php
    // Import file import.php
    include "bai28.php";
    
    // Sử dụng hàm show_message trong file import.php
    show_message();

?>

<?php
    function show_message()
    {
        echo 'Đây là hàm show_message trong file import.php';
    }

?>