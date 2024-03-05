<?php

require_once("Connection.php");

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // In case of an error, preserve user input
    $_SESSION['name'] = $name;
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;

    if ($password == $cpassword) {
        $sql = "INSERT INTO users(name, username, email, password) VALUES('$name', '$username', '$email', '$password')";
    } else {
        $_SESSION['error'] = 'Passwords do not match.';
        $previous_page = $_SERVER['HTTP_REFERER'];

        // Redirect back
        header("Location: $previous_page");
        exit(); // Make sure to exit after redirecting to prevent further execution

    }
} else {
    $_SESSION['error'] = 'Invalid request';
    header("Location: /user/register.php");
    exit();
}

$result = null;

if (isset($sql)) {
    try {
        $result = mysqli_query($conn, $sql);
    } catch (mysqli_sql_exception $e) {
        $_SESSION['error'] = $e->getMessage();

        header("Location: /user/register.php");
        exit();
    }
}

if ($result) {
    $_SESSION['success'] = 'Record added successful';
    unset($_SESSION['error']);
    header("Location: /user/login.php");
} else {
    $_SESSION['error'] = "Record could not be added <br>";
    header("Location: /user/register.php");
}
