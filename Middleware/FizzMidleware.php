<?php

namespace App\Middleware;

class FizzMidleware extends MiddlewareAbstract
{
    private const NAME = 'fizz';
    private const NUMBER = 3;

    public function handle(mixed $value): mixed
    {
        if ($value % self::NUMBER === 0) {
            return self::NAME;
        }
        return parent::handle($value);
    }
}
