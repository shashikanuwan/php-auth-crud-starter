<?php

namespace Core;

class Container
{
    protected static $bindings = [];

    /**
     * @param $key
     * @param $resolver
     * @return void
     */
    public static function bind($key, $resolver)
    {
        self::$bindings[$key] = $resolver;
    }

    /**
     * @param $key
     * @return mixed
     * @throws \Exception
     */
    public static function resolve($key)
    {
        if (!array_key_exists($key, self::$bindings)) {
            throw new \Exception("No matching binding found for {$key}");
        }

        $resolver = self::$bindings[$key];

        return call_user_func($resolver);
    }
}
