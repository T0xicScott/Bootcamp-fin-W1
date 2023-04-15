<?php

function print_film_from_nbr($nombre) {
    switch ($nombre) {
        case ($nombre == 3);
            echo "Les trois freres \n";
            break;
        case ($nombre == 6);
            echo "Sixieme sens \n";
            break;
        case ($nombre == 0);
            echo "l'homme invisible \n";
            break;
        case ($nombre == 23);
            echo "Le nombre 23 \n";
            break;
        case ($nombre == 28);
            echo "28 jours plus tard \n";
            break;
        default :
        echo "Je ne connais pas.\n";
    }
}