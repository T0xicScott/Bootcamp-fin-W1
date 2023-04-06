<?php

function print_age($value) {
    if ($value <= 0) {
        echo "Enfantillage...\n";
    }
    elseif ($value == 42) {
        echo "the answer.\n";
    }
    else {
        echo "Je peux aller en boite\n";
    }
}