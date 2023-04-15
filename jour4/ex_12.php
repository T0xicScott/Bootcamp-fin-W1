<?php

function is_similar($var1, $var2) {
    if ($var1 == $var2 && gettype($var1) == gettype($var2)) {
        echo "Same type and value\n";
    }
    else if ($var1 == $var2) {
        echo "Same value\n";
    }
    else if (gettype($var1) == gettype($var2)) {
        echo "Same type\n";
    }
}