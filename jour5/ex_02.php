<?php

function my_aff_global() {
    foreach ($GLOBALS as $name => $value) {
        if (is_string($value)) {
            echo "$name => $value\n";
        }
    }
}

$a = "hello";
$b = "world";
$c = 123;

my_aff_global();