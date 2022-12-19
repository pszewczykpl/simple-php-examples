<?php

namespace SimpleExamples\DesignPatterns\Behavioral\Strategy\Example;

class Context
{
    public function __construct(
        private readonly Strategy $strategy
        )
    {
        //
    } 
   
    public function calculate($num1, $num2): int
    { 
        return $this->strategy->doOperation($num1, $num2); 
    } 
}
