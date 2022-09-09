<?php

namespace SimpleExamples\DesignPatterns\Behavioral\Strategy;

class Context
{
    public function __construct(readonly Strategy $strategy)
    {

    }
}