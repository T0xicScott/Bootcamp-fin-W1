<?php

function multiples($nombre) {
    $i = 0;
    while ($i <= 200000) {
      if ($i % $nombre == 0) {
        echo $i . "\n";
      }
      $i++;
    }
}