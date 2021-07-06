<?php

namespace App\Middleware;

class FizzBuzzMiddleware extends MiddlewareAbstract
{
    private const NAME = 'fizzBuzz';
    private const NUMBER_1 = 3;
    private const NUMBER_2 = 5;

    public function handle(mixed $value): mixed
    {
        if ($value % self::NUMBER_1 === 0 && $value % self::NUMBER_2 === 0) {
            return self::NAME;
        }
        return parent::handle($value);
    }
}
