<?php

namespace SimpleExamples\DesignPatterns\Creational\Builder\Example;

class App
{
    public function run()
    {
        $builder = new ConcreteBuilder();

        $director = new Director($builder); 
        $director->build();
        
        return $builder->getResult();
    }
}
