<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <?php
        session_start();
        include './../partials/header.php';
    ?>
    <title>Register</title>
</head>
<body>
    <?php
        include './../partials/nav.php';
    ?>
    <div class="container">
        <div class="row justify-content-center vh-100 align-items-center">
            <div class="col-md-6 col-sm-9">
                <h2 class="text-center">Register</h2>
                <div class="card card-primary">
                    <div class="card-body">
                        <?php
                            if (isset($_SESSION['error'])) {
                                echo "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>";
                                unset($_SESSION['error']);
                            }
                        ?>
                        <form action="/app/Register.php" method="post">
                        <input type="hidden" name="action" value="register">
                            <div class="form-floating py-1">
                                <input type="text" name="username" id="username" class="form-control" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : '' ?>">
                                <label for="username">Username</label>
                            </div>
                            <!-- inout for name -->
                            <div class="form-floating py-1">
                                <input type="text" name="name" id="name" class="form-control" required value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : '' ?>">
                                <label for="name">Name</label>
                            </div>
                            <!-- input for email  -->
                            <div class="form-floating py-1">
                                <input type="email" name="email" id="email" class="form-control" required value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : '' ?>">
                                <label for="email">Email</label>
                            </div>
                            <!-- input for password -->
                            <div class="form-floating py-1">
                                <input type="password" name="password" id="password" class="form-control" required>
                                <label for="password">Password</label>
                            </div>
                            <!-- input for confirm password -->
                            <div class="form-floating py-1">
                                <input type="password" name="cpassword" id="cpassword" class="form-control" required>
                                <label for="cpassword">Confirm Password</label>
                            </div>
                            <br>
                            <input type="submit" value="Register" class="btn btn-primary float-end">
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
