<?php

// Import autoloader
require_once '../../../../vendor/autoload.php';

use SimpleExamples\DesignPatterns\Behavioral\Strategy\{ConcreteStrategyA, ConcreteStrategyB, Context};

/**
 * Executing ConcreteStrategyA
 */
$context = new Context(new ConcreteStrategyA());
$value = $context->executeStrategy(1, 2);
print("Executing: ConcreteStrategyA \n");
print("Value: $value \n\n");

/**
 * Executing ConcreteStrategyB
 */
$context = new Context(new ConcreteStrategyB());
$value = $context->executeStrategy(1, 2);
print("Executing: ConcreteStrategyB \n");
print("Value: $value \n\n");