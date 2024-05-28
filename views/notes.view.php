<?php
$title = "Notes";
ob_start();
?>
    <h2>Welcome to My Website</h2>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <?php foreach ($notes as $note): ?>
                <li>
                    <a href="/note?id=<?= $note['id'] ?>">
                        <?= $note['name'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </div>
    </main>

<?php
$content = ob_get_clean();
include 'layouts/app.php';
?>