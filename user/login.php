<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <?php
    session_start();
        include './../partials/header.php';
    ?>
    <title>Login</title>
</head>
<body>
    <?php
        include './../partials/nav.php';
    ?>
    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center">
            <div class="col-md-6 col-sm-9">
                <h2 class="text-center">Login</h2>
                <?php
                    if (isset($_SESSION['error'])) {
                        echo "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>";
                    }
                    if (isset($_SESSION['success'])) {
                        echo "<div class='alert alert-success'>" . $_SESSION['success'] . "</div>";
                    }
                ?>
                <div class="card card-primary">
                    <div class="card-body">
                        <form action="/app/Login.php" method="post">
                            <input type="hidden" name="action" value="login">
                            <!-- input for email  -->
                            <div class="form-floating py-1">
                                <input type="text" name="email" id="email" class="form-control" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : '' ?>">
                                <label for="email">Email / Username</label>
                            </div>
                            <!-- input for password -->
                            <div class="form-floating py-1">
                                <input type="password" name="password" id="password" class="form-control">
                                <label for="password">Password</label>
                            </div>
                            <br>
                            <input type="submit" value="Login" class="btn btn-primary float-end">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include './../partials/footer.php';
    ?>
</body>
</html>
