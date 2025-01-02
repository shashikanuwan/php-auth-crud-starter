<?php

use Core\App;
use Core\Validator;

$db = App::resolve(Core\Database::class);

$errors = [];

if (!Validator::string($_POST['name'], 1, 255)) {
    $errors['name'] = 'The name field is required.';
}

if (empty($errors)) {
    $db->query('INSERT INTO notes (name, user_id) VALUES (:name, :user_id)', [
        ':name' => $_POST['name'],
        ':user_id' => 1
    ]);

    header('Location: /notes');
    exit();
}

view('notes/create.view.php', [
    'errors' => $errors
]);