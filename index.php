<?php

require "function.php";
require "Database.php";
$config = require "config.php";
// require "router.php";

$db = new Database($config['database']);

$id = $_GET['id'] ?? null;
$query = "SELECT * FROM posts where id = ?";

$post = $db->query($query, [$id])->fetch();

dd($post);