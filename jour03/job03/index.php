<?php
    $str = ["I", "'", "m ", " s", "o", "r", "r", "y ",  " D", "a", "v", "e ", " I", "'", "m ",  " a", "f", "r", "a", "i", "d ",  " I ", " c", "a", "n", "'", "t ",  " d", "o ",  " t", "h", "a", "t"];
    $val = ["a", "e", "i", "o", "u", "y"];
    foreach ($str as $key => $value):
        if (in_array($value, $val)):
            echo $value;
        endif;
    endforeach;
?>