<?php

namespace App\Middleware;

class BuzzMiddleware extends MiddlewareAbstract
{
    private const NAME = 'buzz';
    private const NUMBER = 5;

    public function handle(mixed $value): mixed
    {
        if ($value % self::NUMBER === 0) {
            return self::NAME;
        }
        return parent::handle($value);
    }
}
