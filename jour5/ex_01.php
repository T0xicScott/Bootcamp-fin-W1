<?php

function declare_globals() {
    global $a, $b, $c, $d, $e, $f, $g, $h;
    $a = "hello";
    $b = "world";
    $c = "le";
    $d = "monde";
    $e = "n'est";
    $f = "que";
    $g = "PHP";
    $h = "!\n";
    echo "$a $b $c $d $e $f $g $h";
}

declare_globals();