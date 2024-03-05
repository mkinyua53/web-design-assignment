<?php

session_start();

include 'Connection.php';

if ($_SERVER['REQUEST_METHOD'] != 'DELETE') {
    $_SESSION['error'] = 'Invalid request';
    header("Location: /blog.php");
    exit();
}

$id = $_GET['id'];

$sql = "DELETE FROM blogs WHERE id = $id";

try {
    $result = mysqli_query($conn, $sql);
} catch (mysqli_sql_exception $e) {
    $_SESSION['error'] = $e->getMessage();
    $referrer = $_SERVER['HTTP_REFERER'];

    header("Location: $referrer");
    exit();
}

$_SESSION['success'] = 'Post updated successfully';

header("Location: /blog.php");
