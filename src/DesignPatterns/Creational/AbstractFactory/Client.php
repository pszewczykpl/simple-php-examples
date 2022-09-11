<?php

namespace SimpleExamples\DesignPatterns\Creational\AbstractFactory;

class Client
{
    public ProductA $productA;
    public ProductB $productB;

    public function __construct(AbstractFactory $factory)
    {
        $this->productA = $factory->createProductA();
        $this->productB = $factory->createProductB();
    }
}
