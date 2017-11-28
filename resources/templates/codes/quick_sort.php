<?php
    function replace(&$sequence,$i,$j){
        $tmp = $sequence[$i];
        $sequence[$i] = $sequence[$j];
        $sequence[$j] = $tmp;
    }

    function quickSort(&$sequence, $left, $right){
        $i = $left;
        $j = $right;
        $x = $sequence[($left+$right)/2];
        while($i <= $j){
            while($sequence[$i]<$x) $i++;
            while($sequence[$j]>$x) $j--;
            if($i<=$j){
                replace($sequence,$i,$j);
                $i++;$j--;
            }
        }
        if($left<$j) quickSort($sequence,$left,$j);
        if($right>$i) quickSort($sequence,$i,$right);
    }
?>