<?php

function afficher_42($num) {
    $i = 0;
    do {
        if ($num > 42) {
            echo $num . "\n";
            return false;
        }
        echo $i . "\n";
        if ($i == 42) {
            return true;
        }
        $i++;
    } while ($i <= $num);
    return false;
}