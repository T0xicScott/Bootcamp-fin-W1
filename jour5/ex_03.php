<?php

function my_add_to_cookie($cle, $value) {
    setcookie($cle, $value."toto", time() + (86400 * 30));
    
}

my_add_to_cookie("pseudo", "Max_");