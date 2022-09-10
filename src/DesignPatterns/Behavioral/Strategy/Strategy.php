<?php

namespace SimpleExamples\DesignPatterns\Behavioral\Strategy;

interface Strategy
{
    public function execute(int $a, int $b): int;
}
