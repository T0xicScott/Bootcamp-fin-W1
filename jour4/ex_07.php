<?php

function afficherTableau($tableau) {
  $nombreElements = 0;
  foreach ($tableau as $element) {
    echo $element . "\n";
    $nombreElements++;
  }
  return $nombreElements;
}