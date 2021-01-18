<!-- Tìm hiểu hàm header trong PHP -->
<?php
    // header('Location: bai29.php', true, 301);
    // header('Content-Type: text/html; charset=utf-8');
    header("Content-Disposition: attachment; filename=\"download.js\"");
    echo "hello";
?>
