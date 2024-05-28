<?php

$config = require "config.php";
$db = new Database($config['database']);

$query = "SELECT * FROM notes where user_id = 1";
$notes = $db->query($query)->fetchAll();

require "views/notes.view.php";