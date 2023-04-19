<?php 

function my_add_to_session($cle, $valeur) {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION[$cle] = $valeur;
    $_SESSION[$cle] .= "titi\n";

}

my_add_to_session("pseudo", "Max_");
echo $_SESSION["pseudo"];