<?php

namespace SimpleExamples\DesignPatterns\Creational\FactoryMethod;

class ConcreteCreatorB extends Creator
{
    protected function createProduct(): Product
    {
        return new ConcreteProductB();
    }
}
