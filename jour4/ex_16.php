<?php

function print_double_array($tab) {
    foreach ($tab as $key => $val) {
        foreach ($val as $key => $value) {
            echo $value . "\n";
        }
    }
}

print_double_array([[1, 2, 3, 4],[4, 5 ,6 ,7]]);