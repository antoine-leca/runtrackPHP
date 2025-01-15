<?php
    $str = "I'm sorry Dave I'm afraid I can't do that";
    $voyelles = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];
    for ($val = 0 ; $val < strlen($str) ; $val++) {
        if (in_array($str[$val], $voyelles)) {
            echo $str[$val];
        $val++;
        }
    }
?>