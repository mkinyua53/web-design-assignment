<?php

include 'Connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM blogs WHERE id = $id";

try {
    $result = mysqli_query($conn, $sql);
} catch (Exception $e) {
    $_SESSION['error'] = $e->getMessage();
    $referrer = $_SERVER['HTTP_REFERER'];

    header("Location: $referrer");
    exit();
}

$post = mysqli_fetch_assoc($result);
