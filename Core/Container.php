<?php

namespace Core;

use Exception;

class Container
{
    protected static array $bindings = [];

    public static function bind($key, $resolver): void
    {
        self::$bindings[$key] = $resolver;
    }

    /**
     * @throws Exception
     */
    public static function resolve($key): mixed
    {
        if (!array_key_exists($key, self::$bindings)) {
            throw new \Exception("No matching binding found for {$key}");
        }

        $resolver = self::$bindings[$key];

        return call_user_func($resolver);
    }
}
