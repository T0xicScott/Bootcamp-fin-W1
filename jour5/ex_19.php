<?php

function get_authorized_users($permission, $users) {
    foreach ($users as $user) {
        if (isset($user['acl']) && in_array($permission, $user['acl'])) {
            echo $user['login'] . "\n";
        }
    }
}  