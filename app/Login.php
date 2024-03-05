<?php

require_once("Connection.php");

session_start();

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $_SESSION['error'] = 'Invalid request';
    header("Location: /user/login.php");
    exit();
}

$email = $_POST['email'];
$password = $_POST['password'];

// in case of an error, preserve user input
$_SESSION['email'] = $email;
$_SESSION['password'] = '';

$sql = "SELECT * FROM users WHERE email = '$email' OR username = '$email' AND password = '$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    $_SESSION['id'] = $row['id'];
    $_SESSION['username'] = $row['name'];

    unset($_SESSION['error']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);
}

if (!isset($_SESSION['id'])) {
    $_SESSION['error'] = 'Invalid credentials';
    header("Location: /user/login.php");
    exit();
}

header("Location: /");
exit();
