<?php
    // Đệ quy tuyến tính
    function tinhtong($n)
    {
        if ($n == 1){ return $n; }
        return $n + tinhtong($n-1);
    }
    echo tinhtong(100);
?>