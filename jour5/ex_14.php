<?php

function display_names() {
    $scriptName = basename($_SERVER['SCRIPT_NAME']);
    $argCount = func_num_args();
    $isEven = ($argCount % 2 == 0) ? 1 : 0;
    return array($scriptName, '', '', $argCount, $isEven);
}