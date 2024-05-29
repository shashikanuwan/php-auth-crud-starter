<?php

$config = require "config.php";
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (strlen($_POST['name']) === 0) {
        $errors['name'] = 'The name field is required.';
    }

    if (strlen($_POST['name']) > 255) {
        $errors['name'] = 'The name may not be greater than 255 characters.';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes (name, user_id) VALUES (:name, :user_id)', [
            ':name' => $_POST['name'],
            ':user_id' => 1
        ]);
    }
}

require 'views/note-create.view.php';