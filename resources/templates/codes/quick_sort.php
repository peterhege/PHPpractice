<?php
    $change_count = 0;

    function replace(&$sequence,$i,$j){
        $tmp = $sequence[$i];
        $sequence[$i] = $sequence[$j];
        $sequence[$j] = $tmp;
    }

    function quickSort(&$sequence, $left=0, $right=-1){
        global $change_count;
        $i = $left;
        if($right==-1)
            $right = count($sequence) - 1;
        $j = $right;
        $x = $sequence[($left+$right)/2];
        while($i <= $j){
            while($sequence[$i]<$x) $i++;
            while($sequence[$j]>$x) $j--;
            if($i<=$j){
                if($i!=$j) {
                    replace($sequence, $i, $j);
                    $change_count++;
                }
                $i++;$j--;
            }
        }
        if($left<$j) quickSort($sequence,$left,$j);
        if($right>$i) quickSort($sequence,$i,$right);
    }
?>