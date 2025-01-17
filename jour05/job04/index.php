<?php
    function calcule($num, $ope, $num2) {
    switch ($ope):
        case "+":
            echo $num + $num2;
        case "-":
            echo $num - $num2;
        case "*":
            echo $num * $num2;
        case "/":
            echo $num / $num2;
        default:
            echo "Choississez un opérateur valide";
    endswitch;
    }
    calcule(5,"*",2)
?>