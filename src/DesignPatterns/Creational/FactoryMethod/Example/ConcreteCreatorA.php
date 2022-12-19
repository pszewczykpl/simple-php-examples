<?php

namespace SimpleExamples\DesignPatterns\Creational\FactoryMethod\Example;

class ConcreteCreatorA extends Creator
{
    protected function createProduct(): Product
    {
        return new ConcreteProductA();
    }
}
