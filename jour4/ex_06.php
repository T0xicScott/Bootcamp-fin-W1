<?php

function get_angry_bird($nombrePiou) {
  $chaine = "";
  for ($i = 0; $i < $nombrePiou; $i++) {
    $chaine .= "piou";
  }
  $chaine .= "\n";
  return $chaine;
}