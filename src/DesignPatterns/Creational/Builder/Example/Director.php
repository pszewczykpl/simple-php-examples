<?php

namespace SimpleExamples\DesignPatterns\Creational\Builder\Example;

class Director
{
    public function __construct(
        private readonly Builder $builder
    ) {}

    public function build()
    {
        $this->builder->stepA();
        $this->builder->stepB();
        $this->builder->stepC();
    }
}
