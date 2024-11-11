<?php

use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!Validator::string($_POST['name'], 1, 255)) {
        $errors['name'] = 'The name field is required.';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes (name, user_id) VALUES (:name, :user_id)', [
            ':name' => $_POST['name'],
            ':user_id' => 1
        ]);
    }
}

view('notes/create.view.php', [
    'errors' => $errors
]);