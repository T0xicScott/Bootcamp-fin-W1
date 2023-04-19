<?php

function print_array_with_key($tableau) {
    foreach ($tableau as $key => $value) {
        echo $value . " : " . $key . "\n";
    }
}

$tableau = array("fruit" => "pomme", "legume" => "carotte", "boisson" => "eau");
print_array_with_key($tableau);