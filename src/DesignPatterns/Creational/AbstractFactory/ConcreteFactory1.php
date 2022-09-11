<?php

namespace SimpleExamples\DesignPatterns\Creational\AbstractFactory;

class ConcreteFactory1 implements AbstractFactory
{
    public function createProductA(): ConcreteProductA1
    {
        return new ConcreteProductA1();
    }

    public function createProductB(): ConcreteProductB1
    {
        return new ConcreteProductB1();
    }
}
