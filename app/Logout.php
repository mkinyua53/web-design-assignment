<?php
    session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_unset();

    $_SESSION = [];

    header("Location: /");
    # code...
} else {
    $referer = $_SERVER['HTTP_REFERER'];

    $_SESSION['error'] = 'Invalid request';

    header("Location: $referer");
}
