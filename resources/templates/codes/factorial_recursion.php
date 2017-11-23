<?php
    function factorial_recursion($number){
        if($number < 2)
            return 1;
        return $number * factorial_recursion($number-1);
    }
?>