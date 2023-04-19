<?php

function get_execution_time() {
    $temps_debut = microtime(true);
    $temps_fin = microtime(true);
    $temps_execution = $temps_fin - $temps_debut;
    return number_format($temps_execution, 7);
}

echo "le temps d'exec du script est de : " . get_execution_time() . "secondes.\n";