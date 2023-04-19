<?php

function my_print_session($cle) {
    if(isset($_SESSION[$cle])) {
        echo $_SESSION[$cle] . "\n\n";
    }
}