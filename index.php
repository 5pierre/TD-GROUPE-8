<?php

session_start(); 

// if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = [
        'id' => null,
        'name' => null,
        'logged_in' => false,
    ];
// }


include 'view/header.php';
include 'controller/router.php';

