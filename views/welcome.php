<?php
$title = "Home";
ob_start();
include 'layouts/navigation.php';
?>

<h2>Welcome to My Website</h2>
<p>This is the home page content.</p>

<?php
$content = ob_get_clean();
include 'layouts/app.php';
?>