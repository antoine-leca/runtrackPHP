<?php
    $str = [
        "T", "o", "u", "s ", " c", "e", "s " , " i", "n", "s", "t", "a", "n", "t", "s ",
        " s", "e", "r", "o", "n", "t ", " p", "e", "r", "d", "u", "s ", " d", "a", "n", "s ",
        " l", "e ", " t", "e", "m", "p", "s ", " c", "o", "m", "m", "e ", " l", "e", "s ",
        " l", "a", "r", "m", "e", "s ", " s", "o", "u", "s ", " l", "a ", " p", "l", "u", "i", "e", "."
    ];
    $val = 0;
    while ($val < count($str)):
        echo $str[$val];
        $val += 2;
    endwhile;
?>