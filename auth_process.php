<?php

session_start();
require_once 'config.php';

if (isset($_POST['register-btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $chec_email = $conn->query("SELECT email FROM users WHERE email = '$email'");
    if ($chec_email->num_rows > 0) {
        $_SESSION['active_for'] = 'register';
    } else {
        $conn->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");
        $_SESSION['active_form'] = 'login';
    }

    header('Location: index.php');
    exit();
}

if (isset($_POST['login-btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
    $user = $result->num_rows > 0 ? $result->fetch_assoc() : null;

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['name'] = $user['name'];
    } else {
        $_SESSION['active_form'] = 'login';
    }

    header('Location: index.php');
    exit();
}

?>