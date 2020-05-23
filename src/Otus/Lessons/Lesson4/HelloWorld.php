<?php

namespace Otus\Lessons\Lesson4;

class HelloWorld
{
    public function getName(): string
    {
        return static::class;
    }
}