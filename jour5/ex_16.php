<?php

function check_types($arr) {
    foreach ($arr as $key => $values) {
      foreach ($values as $value) {
        if (!is_int($value) && !is_float($value) && !is_string($value) && !is_bool($value)) {
          return false;
        }
      }
    }
    return true;
  }  