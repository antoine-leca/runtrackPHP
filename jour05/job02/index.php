<?php
    function bonjour($jour) {
        $jour = false;
        if ($jour = true) {
            echo "Bonjour";
        }
        else {
            echo "bonsoir";
        }
    }

    bonjour(true);
    bonjour(false);
?>