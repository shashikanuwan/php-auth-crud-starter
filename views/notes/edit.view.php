<?php
$title = "Create Notes";
ob_start();
?>

    <h2>Edit Note</h2>

    <div class="mx-auto max-w-7-xl py-6 sm:px-6 lg:px-8">
        <form method="POST" action="/note">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Body</label>
                <textarea name="name" class="form-control"><?= $note['name'] ?></textarea>
                <?php if (isset($errors['name'])) : ?>
                    <p class="text-danger"><?= $errors['name'] ?></p>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/note?id=<?= $note['id'] ?>" class="btn btn-secondary">Go back</a>
        </form>
    </div>

<?php
$content = ob_get_clean();
require base_path('views/layouts/app.php');
?>