<?php
include "print_array.php";

function replace(&$sequence,$i,$j){
    $tmp = $sequence[$i];
    $sequence[$i] = $sequence[$j];
    $sequence[$j] = $tmp;
}

function bubble_sort(&$sequence){
    $n = count($sequence)-1;
    $move_count = 0;
    for($i=$n-1; $i>=0; $i--) {
        $was_replace = false;
        for ($j = 0; $j <= $i; $j++)
            if ($sequence[$j] > $sequence[$j + 1]){
                replace($sequence, $j, $j + 1);
                $was_replace = true;
            }
        if($was_replace) $move_count++;
    }
    return $move_count;
}