<?php

function convert_number($number) {
    if ($number > 1000) {
        echo "Vive les Pangolins\n";
    } else {
        echo ord($number) . "\n";
    }
}