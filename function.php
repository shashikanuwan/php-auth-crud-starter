<?php

/**
 * @param $value
 * @return void
 */
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

/**
 * @param $value
 * @return bool
 */
function urlIs($value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}

/**
 * @param $condition
 * @param int $status
 * @return void
 */
function authorize($condition, int $status = 403)
{
    if (!$condition) {
        abort($status);
    }
}

/**
 * @param $path
 * @return string
 */
function base_path($path): string
{
    return BASE_PATH . $path;
}

/**
 * @param $path
 * @param array $attributes
 * @return void
 */
function view($path, array $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}