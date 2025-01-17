<?php
    function occurences($str, $char) {
        $str_len = 0;
        $char_counter = 0;
        while (isset($str[$str_len($char)])) {
            $str_len++;
            $char_counter++;
            return $char_counter;
        }
    }
    echo occurences("Bonjour", "o")
?>