<?php
    $str = ["I", "'", "m ", " s", "o", "r", "r", "y ",  " D", "a", "v", "e ", " I", "'", "m ",  " a", "f", "r", "a", "i", "d ",  " I ", " c", "a", "n", "'", "t ",  " d", "o ",  " t", "h", "a", "t"];
    switch($str):
        case $str === "a":
            echo "a";
            break;
        case $str === "e":
            echo "e";
            break;
        case $str === "i":
            echo "i";
            break;
        case $str === "o":
            echo "o";
            break;
        case $str === "u":
            echo "u";
            break;
        case $str === "y":
            echo "y";
            break;
        default:
            echo " ";
            break;
        endswitch;
?>