<?php

use Core\App;

$db = App::resolve(Core\Database::class);

$notes = $db->query('SELECT * FROM notes where user_id = 1')->get();

view('notes/index.view.php', [
    'notes' => $notes
]);