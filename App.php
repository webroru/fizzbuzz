<?php

namespace App;

use App\Iterator\FizzBuzzIterator;
use App\Middleware\BuzzMiddleware;
use App\Middleware\FizzBuzzMiddleware;
use App\Middleware\FizzMidleware;

class App
{
    public static function run()
    {
        $numbers = range(0, 100);

        $middleware = new FizzBuzzMiddleware();
        $middleware->setNext(new FizzMidleware())
            ->setNext(new BuzzMiddleware());

        $fizzBuzzIterator = new FizzBuzzIterator($numbers, $middleware);
        foreach($fizzBuzzIterator as $fizzBuzz) {
            echo $fizzBuzz . PHP_EOL;
        }
    }
}
