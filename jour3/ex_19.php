<?php

function calc($operation, $num1, $num2) {
    switch($operation) {
        case "+":
            return $num1 + $num2;
            break;
        case "-":
            return $num1 - $num2;
            break;
        case "*":
            return $num1 * $num2;
            break;
        case "/":
            return $num1 / $num2;
            break;
        case "%":
            return $num1 % $num2;
            break;
        default:
            return "Invalid operation";
    }
}

echo calc("+", 5, 10);