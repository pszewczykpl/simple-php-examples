<?php

namespace SimpleExamples\DesignPatterns\Behavioral\Strategy\Example;

$context = new Context(new OperationAdd());
$result = $context->calc(10, 5);

$context = new Context(new OperationSubtract());
$result = $context->calc(10, 5); 
