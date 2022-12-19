# Stan
## Opis
Wzorzec projektowy "Stan" (ang. State) to sposób na zapewnienie, że obiekt zachowuje się inaczej w zależności od jego wewnętrznego stanu. Wzorzec ten pozwala na uniezależnienie kodu obiektu od sposobu zmiany jego stanu i zapewnia elastyczność oraz łatwość zmiany zachowania obiektu.

Wzorzec projektowy "Stan" składa się z następujących elementów:
1. Interfejs lub klasa abstrakcyjna, definiująca metody lub właściwości, które są wspólne dla wszystkich stanów obiektu.
2. Konkretne klasy implementujące interfejs lub dziedziczące po klasie abstrakcyjnej, reprezentujące różne stany obiektu i zawierające kod odpowiedzialny za zmianę zachowania obiektu w zależności od stanu.
3. Klasa obiektu, która przechowuje informację o aktualnym stanie i umożliwia zmianę stanu oraz wywoływanie odpowiednich metod lub właściwości dla danego stanu.

Przykładem zastosowania wzorca projektowego "Stan" jest aplikacja do zarządzania projektami. Klasa projektu jest obiektem, a klasy stanów projektu reprezentują różne stany, np. otwarty, zamknięty, anulowany. Klasa projektu przechowuje informację o aktualnym stanie i umożliwia zmianę stanu oraz wywoływanie odpowiednich metod lub właściwości dla danego stanu. Dzięki temu kod aplikacji jest bardziej elastyczny i łatwiejszy do zmiany, ponieważ można łatwo dodawać lub usuwać stany projektu bez konieczności zmiany kodu klienta.

## Struktura
### Przykład teoretyczny
```php
<?php

interface State
{
    public functaon doThis();
}

class StateA implements State
{
    public function doThis()
    {
        // Process context in State A
    }
}

class StateB implements State
{
    public function doThis()
    {
        // Process context in State B
    }
}

class Context
{
    public function __construct(
        private State $state
    ) {}

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function doThis()
    {
        $this->state->doThis();
    }
}

/*
 * Example
 */
$context = new Context(new StateA());
$context->doThis();

$context->setState(new StateB());
$context->doThis();
```

### Przykład praktyczny
Przykład zawierający proste praktyczne zastosowanie wzorca znajduje się w folderze Example.
