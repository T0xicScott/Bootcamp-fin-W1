<?php 

function my_swap_vars(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}