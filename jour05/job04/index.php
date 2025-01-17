<?php
    function calcule($num, $ope, $num2) {
    switch ($ope):
        case "+":
            echo $num + $num2;
            break;
        case "-":
            echo $num - $num2;
            break;
        case "*":
            echo $num * $num2;
            break;
        case "/":
            echo $num / $num2;
            break;
        default:
            echo "Choississez un opérateur valide";
            break;
    endswitch;
    }
    calcule(5,"*",2)
?>