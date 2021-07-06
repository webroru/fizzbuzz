<?php

namespace App\Middleware;

abstract class MiddlewareAbstract implements MiddlewareInterface
{
    private ?MiddlewareInterface $middleware = null;

    public function setNext(MiddlewareInterface $middleware): MiddlewareInterface
    {
        $this->middleware = $middleware;
        return $middleware;
    }

    public function handle(mixed $value): mixed
    {

        if (!$this->middleware) {
            return $value;
        }
        return $this->middleware->handle($value);
    }
}
