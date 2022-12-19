<?php

namespace SimpleExamples\DesignPatterns\Creational\AbstractFactory\Example;

interface AbstractFactory
{
    public function createProductA(): ProductA;
    public function createProductB(): ProductB;
}
