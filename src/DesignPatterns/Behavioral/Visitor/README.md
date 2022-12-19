# Odwiedzający
## Opis
Wzorzec projektowy "Odwiedzający" (ang. Visitor) to sposób na dodanie nowej funkcjonalności do struktur danych bez modyfikowania kodu tych struktur. Wzorzec ten pozwala na uniezależnienie kodu struktur danych od kodu funkcjonalności, co umożliwia łatwą rozbudowę i zmianę zachowania struktur danych.

Wzorzec projektowy "Odwiedzający" składa się z następujących elementów:
1. Interfejs lub klasa abstrakcyjna odwiedzającego, definiująca metody lub właściwości, które są wspólne dla wszystkich odwiedzających.
2. Konkretne klasy odwiedzające implementujące interfejs lub dziedziczące po klasie abstrakcyjnej, które są odpowiedzialne za implementację funkcjonalności dla różnych typów struktur danych.
3. Interfejs lub klasa abstrakcyjna elementu, definiująca metodę, która umożliwia przyjęcie odwiedzającego.
4. Konkretne klasy elementów implementujące interfejs lub dziedziczące po klasie abstrakcyjnej, które są odpowiedzialne za przyjęcie odwiedzającego i wywołanie odpowiedniej metody dla danego typu odwiedzającego.

Przykładem zastosowania wzorca projektowego "Odwiedzający" jest aplikacja do analizy danych o wizytach na stronie internetowej. Klasa wizyta jest elementem, a klasy odwiedzające są odpowiedzialne za implementację funkcjonalności dla różnych typów analiz, np. analiza geolokalizacji, analiza przeglądarek, analiza czasu trwania wizyt. Klasa wizyta przyjmuje odwiedzającego i wywołuje odpowiednią metodę dla danego typu odwiedzającego. Dzięki temu kod aplikacji jest bardziej elastyczny i łatwiejszy do zmiany, ponieważ można łatwo dodawać lub usuwać rodzaje analiz bez konieczności zmiany kodu klasy wizyty.

Innym przykładem zastosowania wzorca projektowego "Odwiedzający" jest aplikacja do obliczania kosztów naprawy samochodu. Klasa części samochodu jest elementem, a klasy odwiedzające są odpowiedzialne za implementację funkcjonalności dla różnych rodzajów napraw, np. naprawa silnika, naprawa zawieszenia, naprawa układu hamulcowego. Klasa części samochodu przyjmuje odwiedzającego i wywołuje odpowiednią metodę dla danego typu odwiedzającego. Dzięki temu kod aplikacji jest bardziej elastyczny i łatwiejszy do zmiany, ponieważ można łatwo dodawać lub usuwać rodzaje napraw bez konieczności zmiany kodu klasy części samochodu.