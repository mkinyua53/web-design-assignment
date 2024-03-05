<?php

session_start();

include 'Connection.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $_SESSION['error'] = 'Invalid request';
    header("Location: /blog.php");
    exit();
}

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

$_SESSION['title'] = $title;
$_SESSION['content'] = $content;

$sql = "UPDATE blogs SET title = '$title', content = '$content' WHERE id = $id";

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
