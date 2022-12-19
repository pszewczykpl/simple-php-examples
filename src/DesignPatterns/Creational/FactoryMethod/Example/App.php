<?php

namespace SimpleExamples\DesignPatterns\Creational\FactoryMethod\Example;

class Client
{
    public function __construct(
        protected Creator $creator
    ) {}

    public function run()
    {
        $this->creator->doSomething();
    }
}

$obj = new Client(new ConcreteCreatorA());
$obj->run();
