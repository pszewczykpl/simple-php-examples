<?php

namespace SimpleExamples\DesignPatterns\Behavioral\Strategy;

class ConcreteStrategyB implements Strategy
{
    public function execute(int $a, int $b): int
    {
        return $a - $b;
    }
}