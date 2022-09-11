<?php

namespace SimpleExamples\DesignPatterns\Creational\AbstractFactory;

interface AbstractFactory
{
    public function createProductA(): ProductA;
    public function createProductB(): ProductB;
}
