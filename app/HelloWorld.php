<?php

declare(strict_types=1);

namespace App;

use Exception;

class HelloWorld
{
    public function __get(string $name): string
    {
        if ($name === 'say') {
            return 'Hello World';
        }
        throw new Exception("Property {$name} does not exist");
    }

    public function __set(string $name, mixed $value): void
    {
        if ($name === 'say') {
            throw new Exception('値の代入はできない');
        }
        throw new Exception("Property {$name} does not exist");
    }
}
