<?php

function make_it_rain(&$val) {
    foreach ($val as $key => $_) {
        $val[$key] = "rain";
    }
    var_dump($val);
}