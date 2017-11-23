<?php
    function is_prim($num) {
        if($num < 2)
            return false;
        if($num % 2 == 0 && $num != 2)
            return false;
        for($i = 3; $i < sqrt($num); $i += 2) {
            if($num % $i == 0)
                return false;
        }
        return true;
    }
?>