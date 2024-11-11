<?php
$title = "About";
ob_start();
?>

<h2>About</h2>

<p>This is the about page content.</p>

<?php
$content = ob_get_clean();
require base_path('views/layouts/app.php');
?>