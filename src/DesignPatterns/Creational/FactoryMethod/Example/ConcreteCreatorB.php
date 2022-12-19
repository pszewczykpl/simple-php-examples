<?php

namespace SimpleExamples\DesignPatterns\Creational\FactoryMethod\Example;

class ConcreteCreatorB extends Creator
{
    protected function createProduct(): Product
    {
        return new ConcreteProductB();
    }
}
