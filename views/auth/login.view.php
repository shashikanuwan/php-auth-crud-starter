<?php
$title = "Create Notes";
ob_start();
?>

<h2>Login</h2>

<div class="mx-auto max-w-7-xl py-6 sm:px-6 lg:px-8">
    <form method="POST" action="/login">

        <div class="row mb-3">
            <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?= old('email') ?>">
                <?php if (isset($errors['email'])) : ?>
                    <p class="text-danger"><?= $errors['email'] ?></p>
                <?php endif; ?>
            </div>
        </div>

        <div class="mb-3">
            <div class="col">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" value="">
                <?php if (isset($errors['password'])) : ?>
                    <p class="text-danger"><?= $errors['password'] ?></p>
                <?php endif; ?>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<?php
$content = ob_get_clean();
require base_path('views/layouts/app.php');
?>
