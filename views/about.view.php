<?php
$title = "About";
ob_start();
?>

<h2>Welcome to My Website</h2>
<p>This is the about page content.</p>

<?php
$content = ob_get_clean();
include 'layouts/app.php';
?>