<?php
    $val = 0;
    while ($val <= 1337):
        if ($val == 26 || $val == 37 || $val == 88 || $val == 1111) {
            echo "<br>";
        } else {
            echo $val . "<br>";
        }
        $val++;
    endwhile;
?>