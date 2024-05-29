<?php

require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (! Validator::string($_POST['name'], 1, 255)) {
        $errors['name'] = 'The name field is required.';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes (name, user_id) VALUES (:name, :user_id)', [
            ':name' => $_POST['name'],
            ':user_id' => 1
        ]);
    }
}

require 'views/notes/create.view.php';