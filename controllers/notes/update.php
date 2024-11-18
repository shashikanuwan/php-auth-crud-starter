<?php

use Core\App;
use Core\Validator;

$db = App::resolve(Core\Database::class);

$currentUserId = 1;

// find the corresponding note
$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_POST['id']
])->findOrFail();

// authorize
authorize($note['user_id'] === $currentUserId);

// validate
$errors = [];

if (!Validator::string($_POST['name'], 1, 255)) {
    $errors['name'] = 'The name field is required.';
}

if (count($errors)) {
    view('notes/edit.view.php', [
        'errors' => $errors,
        'note' => $note
    ]);
}

// update
$db->query('update notes set name = :name where id = :id', [
    'name' => $_POST['name'],
    'id' => $_POST['id'],
]);

header('Location: /notes');
exit();