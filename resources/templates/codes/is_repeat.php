<?php
include "print_array.php";

function is_repeat($array){
    $repeat_count = 0;
    $n = count($array);
    for($i=0; $i<$n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if (isset($array[$i]) && isset($array[$j]) && $array[$i] == $array[$j]) {
                $repeat_count++;
                unset($array[$j]);
            }
        }
    }
    return $repeat_count;
}
?>