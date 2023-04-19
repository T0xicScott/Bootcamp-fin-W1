<?php

function my_print_cookie($clef) {
    if(isset($_COOKIE[$clef])) {
        echo $_COOKIE[$clef] . "_END\n";
    }
}