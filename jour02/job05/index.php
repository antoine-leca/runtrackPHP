<?php
    $val = 0;
    while ($val <= 1000):
        if ($val % 2 === 0) {
            echo $val;
        } else {
            echo "<br>";
        }
        $val++;
    endwhile;
?>