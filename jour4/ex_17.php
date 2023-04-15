<?php

function get_array_key($array, $value) {
    foreach ($array as $key => $val) {
        if ($val === $value) {
            return $key;
        }
    }
}

$fruits = array(
    "pomme" => "rouge",
    "banane" => "jaune",
    "orange" => "orange"
);

$key = get_array_key($fruits, "orange");
echo $key . "\n";