<?php

function levenshtein_distance_from_post() {
    if (isset($_POST["str_one"]) && isset($_POST["str_two"])) {
        return levenshtein($_POST["str_one"], $_POST["str_two"]);
    } else {
        return NULL;
    }
}