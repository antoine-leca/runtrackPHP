<?php
    $val = 0;
    while ($val <= 1337):
        if ($val == 42) {
            echo "<b><u>$val</u></b><br>";
        } else {
            echo $val . "<br>";
        }
        $val++;
    endwhile;
?>