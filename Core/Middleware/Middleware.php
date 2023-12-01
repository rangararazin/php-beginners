<?php

namespace Core\Middleware;

class Middleware{
    const MAP = [
        'guest' => Guest::class,
        'auth' => Auth::class
    ];

    public static function resolve($key){
        if (!$key){
            return;
        }
        $middleware = static::MAP[$key] ?? false;

        //dd($middleware);


        if(!$middleware){
            throw new \Exception("no matching middleware found for key '{$key}'.");
        }

        (new $middleware)->handle();
    }
}