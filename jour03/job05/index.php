<?php
    $str = "On n'est pas le meilleur quand on le croit mais quand on le sait.";
    $voyelles = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];
    $str_len = 0;
    $keyC = 0;
    $keyV = 0;
    while (isset($str[$str_len])) {
        $str_len++;
    }
    for ($val = 0 ; $val < $str_len ; $val++) {
        $isvoyelle = false;
        foreach ($voyelles as $voyelle) {
            if ($str[$val] === $voyelle) {
                $isvoyelle = true;
                $keyV++;
                echo $keyV;
            }
            else {
                $keyC++;
                echo $keyC;
            }
        }
    }
?>