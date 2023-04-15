<?php 

function return_calls() {
    static $count = 0;
    $count+=3;
    echo "La fonction return_calls a été appelée $count fois\n";
}

return_calls();