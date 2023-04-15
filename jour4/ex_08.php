<?php

function print_array_with_key($tableau) {
  foreach ($tableau as $cle => $valeur) {
    echo $cle . " : " . $valeur . "\n";
  }
}