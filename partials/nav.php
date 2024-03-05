<?php
  include 'errors.php';
?>

<div class="container container-fluid">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">VioWatch</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contactus.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/blog.php">Blog</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <?php
                if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
                    echo '<li class="nav-item logout-button" title="Logout"><a href="#">' . $_SESSION['username'] . '</a></li>';
                } else {
                    echo '<li class="nav-item">
                            <a href="/user/register.php" class="nav-link">Register</a>
                          </li>
                          <li class="nav-item">
                            <a href="/user/login.php" class="nav-link">Login</a>
                          </li>';
                }
            ?>
        </ul>
      </div>
    </div>
  </nav>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const usernameElement = document.querySelector('.logout-button a');

    if (usernameElement) {
        usernameElement.addEventListener('click', function() {
            // Make a POST request to Logout.php
            fetch('/app/Logout.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    // Redirect or handle successful logout
                    window.location.href = 'index.php'; // Redirect to the login page or any other page
                } else {
                    // Handle error
                    console.error('Logout failed');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    }
});
</script>
