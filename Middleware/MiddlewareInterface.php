<?php

namespace App\Middleware;

interface MiddlewareInterface
{
    public function setNext(MiddlewareInterface $middleware): self;
    public function handle(mixed $value): mixed;
}
