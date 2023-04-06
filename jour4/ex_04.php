<?php

function print_until($valeur) {
    if($valeur < 0) {
        echo "Boulet !\n";
        return false;
    } else {
        $i = 0;
        while ($i <= $valeur) {
            echo $i . "\n";
            $i++;
        }
        return true;
    }
}