<?php

include 'Connection.php';
// UserActions.php
class AppController {
    public function login() {
        // Your login logic here
    }

    public function register() {
        // Your registration logic here
    }
}

// Instantiate the class
$userActions = new AppController();

// Check which function to call based on form submission
if(isset($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        case 'login':
            $userActions->login();
            break;
        case 'register':
            $userActions->register();
            break;
        // Add more cases for other functions if needed
    }
}
