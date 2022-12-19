<?php

namespace SimpleExamples\DesignPatterns\Creational\AbstractFactory\Example;

class ConcreteFactory2 implements AbstractFactory
{
    public function createProductA(): ConcreteProductA2
    {
        return new ConcreteProductA2();
    }

    public function createProductB(): ConcreteProductB2
    {
        return new ConcreteProductB2();
    }
}
