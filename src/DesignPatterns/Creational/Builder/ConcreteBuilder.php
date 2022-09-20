<?php

namespace SimpleExamples\DesignPatterns\Creational\Builder;

class ConcreteBuilder implements Builder
{
    private Product $result;

    public function __construct()
    {
        $this->result = new Product();
    }

    public function stepA()
    {
        // Do something
    }

    public function stepB()
    {
        // Do something
    }

    public function stepC()
    {
        // Do something
    }

    public function getResult()
    {
        return $this->result;
    }
}
