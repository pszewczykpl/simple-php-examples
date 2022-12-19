<?php

namespace SimpleExamples\DesignPatterns\Creational\AbstractFactory\Example;

class App
{
    public ProductA $productA;
    public ProductB $productB;

    public function __construct(AbstractFactory $factory)
    {
        $this->productA = $factory->createProductA();
        $this->productB = $factory->createProductB();
    }
}

$factory = new ConcreteFactory1();
$factory->createProductA();

// or

$app = new App(new ConcreteFactory2());
$app->productA->doSomething();