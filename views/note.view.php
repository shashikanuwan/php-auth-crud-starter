<?php
$title = "Notes";
ob_start();
?>
    <h2>Show Note</h2>

    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>
            <a href="/notes">Go back</a>
        </p>
        <p>
            <?= $note['name'] ?>
        </p>
    </div>

<?php
$content = ob_get_clean();
include 'layouts/app.php';
?>