<?php
$title = "Home";
ob_start();
?>

<h2>Welcome to My Website</h2>
<p>This is the home page content.</p>

<?php
$content = ob_get_clean();
require base_path('views/layouts/app.php');
?>