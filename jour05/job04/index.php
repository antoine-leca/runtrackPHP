<?php
    function calcule($num, $ope, $num2) {
    switch ($ope):
        case "+":
            return $num + $num2;
        case "-":
            return $num - $num2;
        case "*":
            return $num * $num2;
        case "/":
            return $num / $num2;
        default:
            return "Choississez un opérateur valide";
    endswitch;
    }
    calcule(5,"*",2)
?>