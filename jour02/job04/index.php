<?php
    $val = 0;
    while ($val <= 100):
        if ($val % 15 === 0) {
            echo "FizzBuzz<br>";
        } 
        elseif ($val % 3 === 0) {
            echo "Fizz<br>";
        }
        elseif ($val % 5 === 0) {
            echo "Buzz<br>";
        }
        else {
            echo $val . "<br>";
        }
        $val++;
    endwhile;
?>