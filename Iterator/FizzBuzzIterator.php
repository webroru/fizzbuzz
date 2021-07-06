<?php

namespace App\Iterator;

use App\Middleware\MiddlewareInterface;

class FizzBuzzIterator implements \Iterator
{
    private int $position = 0;
    private array $cache = [];

    public function __construct(
        private array $numbers,
        private MiddlewareInterface $middleware
    ) {}

    public function current(): string
    {
        $number = $this->numbers[$this->position];
        if (isset($this->cache[$number])) {
            return $this->cache[$number];
        }

        $result = $this->middleware->handle($number);
//        foreach ($this->conditions as $name => $condition) {
//            if ($condition($number)) {
//                $this->cache[$number] = $name;
//                return $name;
//            }
//        }
        $this->cache[$number] = $result;
        return $result;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function valid(): bool
    {
        return isset($this->numbers[$this->position]);
    }
}
