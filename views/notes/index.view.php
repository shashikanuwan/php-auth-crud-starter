<?php
$title = "Notes";
ob_start();
?>
    <h2>All Notes</h2>

    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($notes as $note): ?>
                <li>
                    <a href="/note?id=<?= $note['id'] ?>">
                        <?= $note['name'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p>
            <a href="notes/create">Create Note</a>
        </p>

    </div>

<?php
$content = ob_get_clean();
include 'views/layouts/app.php';
?>