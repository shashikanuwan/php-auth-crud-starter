<?php

use Core\App;

$db = App::resolve(Core\Database::class);

$currentUserId = 1;

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

require view('notes/edit.view.php', [
    'errors' => [],
    'note' => $note
]);