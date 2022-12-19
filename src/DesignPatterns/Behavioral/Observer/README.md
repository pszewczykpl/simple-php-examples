# Obserwator
## Opis
Wzorzec projektowy "Obserwator" (ang. Observer) to sposób na powiadamianie obiektów o zmianach w innych obiektach, tak aby mogły one reagować na te zmiany. Wzorzec ten pozwala na oddzielenie kodu odpowiedzialnego za reagowanie na zmiany od kodu zgłaszającego zmiany, co umożliwia łatwą zmianę sposobu reagowania na zmiany bez konieczności modyfikowania kodu zgłaszającego zmiany.

Wzorzec projektowy "Obserwator" składa się z następujących elementów:
1. Interfejs lub klasa abstrakcyjna obserwatora, definiująca metodę do reagowania na zmiany.
2. Klasy konkretnych obserwatorów, implementujące interfejs lub dziedziczące po klasie abstrakcyjnej i zawierające kod do reagowania na zmiany.
3. Interfejs lub klasa abstrakcyjna obserwowanego obiektu, definiująca metody do dodawania i usuwania obserwatorów oraz do powiadamiania ich o zmianach.
4. Klasa konkretnego obserwowanego obiektu, implementująca interfejs lub dziedzicząca po klasie abstrakcyjnej i zawierająca kod do zgłaszania zmian oraz do obsługi listy obserwatorów.

Przykładem zastosowania wzorca projektowego "Obserwator" jest aplikacja do zarządzania zleceniami, która powiadamia pracowników o nowych zleceniach lub zmianach w istniejących zleceniach. Klasa zlecenia jest obserwowanym obiektem, a klasy pracowników są obserwatorami. Gdy pojawia się nowe zlecenie lub dochodzi do zmian w istniejącym zleceniu, klasa zlecenia powiadamia pracowników o tych zmianach, wywołując odpowiednią metodę w ich obiektach. Dzięki temu kod pracowników jest odłączony od kodu zleceń i może być dynamicznie zmieniany, bez konieczności modyfikowania kodu zleceń.

Innym przykładem zastosowania wzorca projektowego "Obserwator" jest aplikacja do zarządzania kontem bankowym, która powiadamia klienta o zmianach w stanie jego konta. Klasa konta bankowego jest obserwowanym obiektem, a klasa klienta jest obserwatorem. Gdy dochodzi do zmian w stanie konta, np. dokonano wpłaty lub wypłaty, klasa konta bankowego powiadamia klienta o tych zmianach, wywołując odpowiednią metodę w jego obiekcie. Dzięki temu kod klienta jest odłączony od kodu konta bankowego i może być dynamicznie zmieniany, bez konieczności modyfikowania kodu konta bankowego.

# Przykład
```php
<?php

interface Observer {
    public function update(Subject $subject);
}

interface Subject {
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}

class User implements Observer {
    public function update(Subject $subject) {
        echo "User notified of a change in the subject.";
    }
}

class Database implements Subject {
    private $observers = array();

    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer) {
        foreach ($this->observers as $key => $value) {
            if ($value === $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    // Database methods here
}

$user = new User();

$database = new Database();
$database->attach($user);
$database->notify();
```