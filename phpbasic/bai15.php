<?php
    // kỹ thuật dặt lính canh
    function tim_max($a, $b, $c)
    {
        $max = $a;
        if ($max < $b){
            $max = $b;
        }
        if ($max < $c){
            $max = $c;
        }
        return $max;
       
    }

    echo tim_max(5, 8, 3);
?>