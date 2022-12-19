<?php

namespace SimpleExamples\DesignPatterns\Behavioral\Strategy\Example;

class OperationSubtract implements Strategy
{
    public function doOperation($num1, $num2)
    { 
        return $num1 - $num2; 
    } 
}
