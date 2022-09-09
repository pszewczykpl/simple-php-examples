<?php

namespace SimpleExamples\DesignPatterns\Behavioral\Strategy;

class Context
{
    public function __construct(
        private readonly Strategy $strategy
    ) {}

    public function executeStrategy($a, $b): int
    {
        return $this->strategy->execute($a, $b);
    }
}