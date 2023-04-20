<?php

function my_sort_files(&$tableau) {
    sort($tableau);
    foreach ($tableau as $key => $value) {
        echo $value . "\n";
    }
}

$tableau = array(5, 8, 6 ,7, 1 ,0 ,9 ,3 ,4 ,2);
my_sort_files($tableau);