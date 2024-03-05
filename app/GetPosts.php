<?php

require_once('Connection.php');

$sql = "SELECT * FROM blogs";

try {
    $result = mysqli_query($conn, $sql);
} catch (mysqli_sql_exception $e) {
    $_SESSION['error'] = $e->getMessage();
    header("Location: /");
    exit();
}

$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (count($posts) == 0) {
    echo '<h3 class="text-center">No posts yet</h3>';
}

foreach ($posts as $post) {
    echo '<div class="card"><div class="card-body">';
    echo "<h1>{$post['title']}</h1>";
    echo '<div>' . nl2br(htmlspecialchars($post['content'])) . '</div>';
    echo '<p class="text-muted">Created on ' . $post['created_at'] . ' by ' . $post['author'] . '</p>';
    echo '<div class="float-end"><a class="btn btn-sm btn-outline-warning" href="/blog/update.php?id=' . $post['id'] . '">Edit</a> | <a class="btn btn-sm btn-outline-danger" href="/blog/delete.php?id=' . $post['id'] . '">Delete</a></div>';
    echo '</div></div>';
    echo "<hr>";
}
