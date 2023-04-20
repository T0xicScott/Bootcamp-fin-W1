<?php

if(isset($_POST['email'])) {
    $email = trim($_POST['email']);
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "courriel valide\n";
    } else {
        echo "courriel invalide\n";
    }
}