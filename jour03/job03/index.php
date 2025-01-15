<?php
    $str = [
        "I", "'", "m ",  " s", "o", "r", "r", "y ",  " D", "a", "v", "e ",  " I", "'", "m ",  " a", "f", "r", "a", "i", "d ",  " I ",  " c", "a", "n", "'", "t ",  " d", "o ",  " t", "h", "a", "t"];
    $val = 0;
    while ($val < count($str)):
        // echo $str[$val];
        $val++;
        if ($val == "a" || $val == "e" || $val == "i" || $val == "o" || $val == "u" || $val == "y") {
            echo $str[$val];
        }
    endwhile;
?>