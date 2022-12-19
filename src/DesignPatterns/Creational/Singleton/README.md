# Singleton (Singleton)
## Opis
Wzorzec projektowy "Singleton" to sposób tworzenia obiektu, który zapewnia, że danej klasy będzie istniał tylko jeden egzemplarz. Klasa ta zawiera metodę statyczną, która zwraca instancję tej klasy, a jeśli instancja już istnieje, zostaje ona zwrócona bez tworzenia nowej.

Wzorzec projektowy "Singleton" składa się z następujących elementów:
1. Klasa, która zawiera metodę statyczną do tworzenia lub zwracania instancji tej klasy.
2. Prywatny konstruktor, który zapobiega tworzeniu instancji tej klasy z zewnątrz.
3. Prywatne pole statyczne, które przechowuje instancję tej klasy.

Przykładem zastosowania wzorca projektowego "Singleton" jest tworzenie obiektu reprezentującego połączenie z bazą danych w aplikacji webowej. W tym przypadku chcemy zapewnić, że tylko jedna instancja obiektu połączenia z bazą danych jest tworzona, aby uniknąć tworzenia wielu niepotrzebnych połączeń i obciążenia serwera. Klasa połączenia z bazą danych używa wzorca projektowego "Singleton" do zapewnienia, że tylko jedna instancja tej klasy jest tworzona i udostępniana wszystkim klasom, które jej potrzebują.

## Struktura
```php
namespace SimpleExamples\DesignPatterns\Creational\Singleton\Example;

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
```