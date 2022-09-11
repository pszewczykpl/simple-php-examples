<?php

namespace SimpleExamples\DesignPatterns\Creational\FactoryMethod;

class ConcreteCreatorA extends Creator
{
    protected function createProduct(): Product
    {
        return new ConcreteProductA();
    }
}
