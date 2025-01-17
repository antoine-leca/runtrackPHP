<?php
    function bonjour($jour) {
        $jour = false;
        if ($jour === true) {
            echo "Bonjour<br>";
        }
        else {
            echo "Bonsoir";
        }
    }

    bonjour(true);
    bonjour(false);
?>