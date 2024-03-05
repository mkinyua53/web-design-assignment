<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <?php
    session_start();
    include './partials/header.php';
  ?>
  <title>Blog</title>
</head>
<body>
  <?php
    include './partials/nav.php';
  ?>
  <div class="container">
    <div class="row">
      <div class="col align-self-center">
        <h2 class="text-center">Our Blog</h2>
        <?php
          // load existing posts
          include 'app/GetPosts.php';
        ?>
      </div>
    </div>
    <hr>
    <!-- form to creaate a new blog post -->
    <div class="row">
      <div class="col justify-end">
        <div class="card">
          <div class="card-header">Create New Post</div>
          <div class="card-text">
            <form action="app/StorePost.php" method="POST">
              <input type="hidden" name="action" value="post_create">
              <div class="form-floating py-1">
                  <input type="text" name="title" id="title" class="form-control" value="<?php echo isset($_SESSION['title']) ? $_SESSION['title'] : '' ?>">
                  <label for="title">Post Title</label>
              </div>
              <div class="form-floating py-1">
                  <textarea name="content" id="content" class="form-control" cols="30" style="height: 200px;" value="<?php echo isset($_SESSION['content']) ? $_SESSION['content'] : '' ?>" required></textarea>
                  <label for="content">Post Content</label>
              </div>
              <br>
              <input type="submit" value="Save" class="btn btn-primary float-end">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    include './partials/footer.php';
  ?>
</body>
</html>
