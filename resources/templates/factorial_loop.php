<?php
    function factorial_loop($number){
        if($number<2)
            return 1;

        $f = 2;
        for($i=3;$i<=$number;$i++){
            $f *= $i;
        }

        return $f;
    }
?>