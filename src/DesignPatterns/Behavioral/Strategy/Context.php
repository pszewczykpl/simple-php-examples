<?php

namespace SimpleExamples\DesignPatterns\Behavioral\Strategy;

class Context
{
    public function __construct(
        private readonly Strategy $strategy
    ) {}

    public function doSomething(): int
    {
        return $this->strategy->execute(a: 1, b: 2);
    }
}
