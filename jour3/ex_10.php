<?php

function print_calls() {
    static $count = 0;
    $count++;
    echo "La fonction print_calls a été appelée $count fois\n";
}

print_calls();
print_calls();
print_calls();
print_calls();
print_calls();
print_calls();