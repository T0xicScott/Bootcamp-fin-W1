<?php

function check_url($whiteList) {
    if (!isset($_GET['token'])) {
      return false;
    }
    
    $token = $_GET['token'];
    
    for ($i = 0; $i < strlen($token); $i++) {
      if (!in_array($token[$i], $whiteList)) {
        return -1;
      }
    }
    return 1;
}