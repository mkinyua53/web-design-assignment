<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
    <head>
        <?php
            session_start();
            include './../partials/header.php';
        ?>
    </head>
    <body>
        <?php
            include './../partials/nav.php';

            include './../app/GetPost.php';
        ?>
        <input type="hidden" id="post_id" value="<?php echo $post['id'] ?>">

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                let idInput = document.getElementById('post_id')
                let id

                if (idInput) {
                    id = idInput.value
                    id = parseInt(id)
                }
                fetch(`/app/DeletePost.php?id=${id}`, {
                    method: 'DELETE'
                })
                .then(res => {
                    //
                })
                .catch(err => {
                    //
                })
                .finally(() => {
                    window.location.href = '/blog.php'
                })
            })
        </script>
    </body>
</html>
