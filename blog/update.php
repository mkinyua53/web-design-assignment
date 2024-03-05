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
        <div class="container">
            <div class="row justify-content-center vh-100 align-items-center">
                <div class="col-md-6 col-sm-9">
                    <div class="card card-primary">
                        <div class="card-header">Update Post</div>
                        <div class="card-body">
                            <form action="./../app/UpdatePost.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $post['id'] ?>">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $post['title'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea name="content" id="content" class="form-control" cols="30" rows="10" required><?php echo $post['content'] ?></textarea>
                                </div>
                                <input type="submit" value="Update" class="btn btn-primary float-end">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
