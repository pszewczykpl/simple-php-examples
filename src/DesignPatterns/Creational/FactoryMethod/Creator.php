<?php

namespace SimpleExamples\DesignPatterns\Creational\FactoryMethod;

abstract class Creator
{
    abstract protected function createProduct(): Product;

    public function doSomething()
    {
        $product = $this->createProduct();
        $product->doStuff();
    }
}
