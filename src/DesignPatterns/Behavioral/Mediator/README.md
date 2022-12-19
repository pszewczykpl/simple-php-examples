# Mediator
## Opis
Wzorzec projektowy "Mediator" (ang. Mediator) to sposób na ograniczenie bezpośrednich kontaktów między obiektami do minimum, poprzez umieszczenie ich w pośredniku, który zarządza ich interakcjami. Dzięki temu obiekty są od siebie odłączone i zależą tylko od pośrednika, co umożliwia łatwą zmianę sposobu ich wzajemnego wpływu bez konieczności modyfikowania kodu obiektów.

Wzorzec projektowy "Mediator" składa się z następujących elementów:
1. Interfejs lub klasa abstrakcyjna mediatora, definiująca metody do komunikacji z obiektami.
2. Klasa konkretna mediatora, implementująca interfejs lub dziedzicząca po klasie abstrakcyjnej i zawierająca kod do zarządzania interakcjami między obiektami.
3. Interfejs lub klasa abstrakcyjna kolegi, definiująca metody do komunikacji z mediatorem.
4. Klasy konkretne kolegów, implementujące interfejs lub dziedziczące po klasie abstrakcyjnej i zawierające kod do wykonywania konkretnych działań oraz komunikacji z mediatorem.

Przykładem zastosowania wzorca projektowego "Mediator" jest system rezerwacji biletów lotniczych. Obiektem mediatora jest system rezerwacji, a obiektami kolegami są różne linie lotnicze i ich loty. Każda linia lotnicza komunikuje się z systemem rezerwacji w celu udostępnienia dostępnych miejsc i cen oraz zarezerwowania biletów, a klient komunikuje się z systemem rezerwacji w celu wyboru lotu i zarezerwowania biletów. Dzięki temu kod klienta jest odłączony od kodu linii lotniczych i system rezerwacji może być dynamicznie zmieniany, bez konieczności modyfikowania kodu linii lotniczych.