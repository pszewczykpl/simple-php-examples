# Strategia (Strategy)
## Opis
Wzorzec projektowy "Strategia" (ang. Strategy) to sposób tworzenia obiektów, który pozwala zmieniać sposób działania obiektu poprzez zmianę jego strategii. Dzięki temu kod jest bardziej elastyczny i łatwiejszy do zmiany, ponieważ zmiana sposobu działania obiektu nie wpływa na jego kod, a jedynie na wybraną strategię.

Wzorzec projektowy "Strategia" składa się z kilku elementów:
1. Interfejs lub klasa abstrakcyjna, definiująca strategię działania obiektu.
2. Konkretne klasy implementujące interfejs lub dziedziczące po klasie abstrakcyjnej, które są odpowiedzialne za implementację różnych strategii działania obiektu.
3. Klasa obiektu, która korzysta z interfejsu lub klasy abstrakcyjnej, definiującej strategię, aby móc zmieniać swój sposób działania w zależności od wybranej strategii.

Przykładem zastosowania wzorca projektowego "Strategia" jest program do obsługi rachunków bankowych. Klasa obiektu reprezentująca rachunek bankowy korzysta z interfejsu lub klasy abstrakcyjnej definiującej strategię obliczania odsetek. Można zdefiniować różne strategie obliczania odsetek (np. stałe, zmiennie), a klasa obiektu rachunku bankowego może zmieniać swoją strategię obliczania odsetek w zależności od potrzeb.

## Struktura
### Przykład teoretyczny
```php
<?php

interface Strategy
{
    public function execute();
}

class StrategyA implements Strategy
{
    public function execute()
    {
        // execute strategy
    }
}

class StrategyB implements Strategy
{
    public function execute()
    {
        // execute strategy
    }
}

class Context
{
    public function __construct(
        private readonly Strategy $strategy
    ) {}

    public function doThis()
    {
        $value = $this->strategy->execute();

        // do this
        
        return $value;
    }
}

/*
 * Example
 */

// Run Context with StrategyA
$context = new Context(new StrategyA());
$value = $context->doThis();

// Run Context with StrategyA
$context = new Context(new StrategyB());
$value = $context->doThis();
```

### Przykład praktyczny
Przykład zawierający proste praktyczne zastosowanie wzorca znajduje się w folderze Example.
