<?php

    $server = 'localhost';
    $db = 'campus';
    $user = 'campus';
    $password = '';

    $conn = mysqli_connect($server, $user, $password, $db);

    if ($conn) {
        // echo 'Connection successful <br>';
    } else {
        echo 'Connection failed <br>';
    }
