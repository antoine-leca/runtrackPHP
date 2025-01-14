<?php
    $val = 0;
    while ($val <= 100):
        if ($val == 42) {
            echo "LaPlateforme_ <br>";
        } 
        elseif ($val>1 && $val<20) {
            echo "<i>$val</i><br>";
        }
        elseif ($val>25 && $val<50) {
            echo "<u>$val</u><br>";
        }
        else {
            echo $val . "<br>";
        }
        $val++;
    endwhile;
?>