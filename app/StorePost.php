<?php

session_start();

include 'Connection.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $_SESSION['error'] = 'Invalid request';
    header("Location: /blog.php");
    exit();
}

if (!isset($_SESSION['id'])) {
    $_SESSION['error'] = 'You must be logged in to create a post';
    header("Location: /user/login.php");
    exit();
}

$title = $_POST['title'];
$content = $_POST['content'];

$_SESSION['title'] = $title;
$_SESSION['content'] = $content;

$author = $_SESSION['username'];
$sql = "INSERT INTO blogs(title, content, author) VALUES('$title', '$content', '$author')";

try {
    $result = mysqli_query($conn, $sql);
} catch (mysqli_sql_exception $e) {
    $_SESSION['error'] = $e->getMessage();
    header("Location: /blog.php");
    exit();
}

$_SESSION['success'] = 'Post created successfully';
unset($_SESSION['error']);
unset($_SESSION['title']);
unset($_SESSION['content']);
header("Location: /blog.php");
