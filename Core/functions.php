<?php


use Core\Session;
use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function dd($value): void
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}

#[NoReturn] function abort(int $code = 404): void
{
    http_response_code($code);

    require base_path("views/partials/{$code}.php");

    die();
}

function authorize($condition, int $status = 403): void
{
    if (!$condition) {
        abort($status);
    }
}

function base_path($path): string
{
    return BASE_PATH.$path;
}

function view($path, array $attributes = []): void
{
    extract($attributes);

    require base_path('views/'.$path);
}

#[NoReturn] function redirect($path): void
{
    header("location: {$path}");
    exit();
}

function old($key, $default = '')
{
    return Session::get('old')[$key] ?? $default;
}