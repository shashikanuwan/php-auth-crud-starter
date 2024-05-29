<?php

$config = require "config.php";
$db = new Database($config['database']);

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === 1);

require "views/note.view.php";