<?php
$title = "Create Notes";
ob_start();
?>

    <h2>Create Note</h2>

    <div class="mx-auto max-w-7-xl py-6 sm:px-6 lg:px-8">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Body</label>
                <textarea name="name" class="form-control"><?= $_POST['name'] ?? '' ?></textarea>
                <?php if (isset($errors['name'])) : ?>
                    <p class="text-danger"><?= $errors['name'] ?></p>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

<?php
$content = ob_get_clean();
include 'layouts/app.php';
?>