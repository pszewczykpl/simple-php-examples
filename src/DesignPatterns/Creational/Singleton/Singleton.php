<?php

namespace SimpleExamples\DesignPatterns\Creational\Singleton;

use Exception;

final class Singleton
{
    private static ?Singleton $instance = null;

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) self::$instance = new self();
        return self::$instance;
    }

    public function __wakeup()
    {
        throw new Exception(message: "Cannot unserialize Singleton");
    }

    private function __construct() {}

    private function __clone() {}
}
