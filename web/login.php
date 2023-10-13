<?php
session_start();

if (isset($_POST['newUserButton'])) {
    
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $expected_username = '123';
    $expected_password = '123';
    
    if ($username === $expected_username && $password === $expected_password) {
        $_SESSION['logged_in'] = true;
        echo "Right password";
    } else {
        echo "Wrong username or password. Try again.";
    }
}
?>
