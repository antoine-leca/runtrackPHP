<?php
    $val = 0;
    for($i=1;$i<=1000;$i++) {      
        $b=0;
        for($j=1;$j<=$i;$j++){
            if($i%$j==0){
                $b=$b+1;
            }
        }
        if($b==2){
            echo ' '.$i;
        }
    }
?>