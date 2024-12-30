<?php

use Core\App;
use Core\Validator;

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::string($name)) {
    $errors['name'] = "Name is required";
}

if (!Validator::email($email)) {
    $errors['email'] = "Email is required";
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = "Please provide a password of at least 7 characters";
}

if (!empty($errors)) {
    require view('auth/register.view.php', ['errors' => $errors]);
}

$db = App::resolve(Core\Database::class);

$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $email
])->find();

if ($user) {
    header('Location: /login');
    exit();
} else {
    $db->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)', [
        'name' => $name,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    $_SESSION['user'] = [
        'name' => $name,
        'email' => $email,
    ];

    header('Location: /');
    exit();
}