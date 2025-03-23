<?php
$title = "Create Notes";
ob_start();
?>

<h2>Register</h2>

<div class="mx-auto max-w-7-xl py-6 sm:px-6 lg:px-8">
    <form method="POST" action="/register">

        <div class="row mb-3">
            <div class="col">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="<?= $_POST['name'] ?? '' ?>">
                <?php if (isset($errors['name'])) : ?>
                    <p class="text-danger"><?= $errors['name'] ?></p>
                <?php endif; ?>
            </div>

            <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?= $_POST['email'] ?? '' ?>">
                <?php if (isset($errors['email'])) : ?>
                    <p class="text-danger"><?= $errors['email'] ?></p>
                <?php endif; ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" value="<?= $_POST['password'] ?? '' ?>">
            <?php if (isset($errors['password'])) : ?>
                <p class="text-danger"><?= $errors['password'] ?></p>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

<?php
$content = ob_get_clean();
require base_path('views/layouts/app.php');
?>
