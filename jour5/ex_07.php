<?php

function reset_session() {
    $_SESSION = array();
    session_destroy();
    session_start();
}
