<?php

namespace SimpleExamples\DesignPatterns\Behavioral\Strategy;

class ConcreteStrategyA implements Strategy
{
    public function execute(int $a, int $b): int
    {
        return $a + $b;
    }
}