<?php

namespace SimpleExamples\DesignPatterns\Creational\FactoryMethod\Example;

abstract class Creator
{
    abstract protected function createProduct(): Product;

    public function doSomething()
    {
        $product = $this->createProduct();
        $product->doStuff();
    }
}
