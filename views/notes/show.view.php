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

        <form method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="text-danger">Delete</button>
        </form>

    </div>

<?php
$content = ob_get_clean();
require base_path('views/layouts/app.php');
?>