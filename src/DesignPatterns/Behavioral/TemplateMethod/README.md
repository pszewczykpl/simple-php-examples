# Metoda szablonowa
## Opis
Wzorzec projektowy "Metoda szablonowa" (ang. Template Method) to sposób tworzenia algorytmu, który pozwala uniezależnić kod klienta od konkretnych klas, w których implementowany jest algorytm. Dzięki temu kod jest bardziej elastyczny i łatwiejszy do zmiany, ponieważ zmiana sposobu implementacji algorytmu nie wpływa na kod klienta.

Wzorzec projektowy "Metoda szablonowa" składa się z kilku elementów:
1. Interfejs lub klasa abstrakcyjna, definiująca metodę szablonową, która zawiera kroki algorytmu.
2. Konkretne klasy implementujące interfejs lub dziedziczące po klasie abstrakcyjnej, które są odpowiedzialne za implementację poszczególnych kroków algorytmu.
3. Klasa klienta, która korzysta z metody szablonowej do wykonania algorytmu, ale nie jest zależna od konkretnych klas, w których implementowany jest algorytm.

Przykładem zastosowania wzorca projektowego "Metoda szablonowa" jest aplikacja do generowania raportów. Klasa raportu jest obiektem, a klasa szablonu raportu jest interfejsem lub klasą abstrakcyjną, definiującą metodę szablonową, która zawiera kroki generowania raportu. Konkretne klasy szablonów raportu implementują poszczególne kroki generowania raportu dla różnych rodzajów raportów, np. sprzedaży, kosztów, zysków. Klasa klienta korzysta z interfejsu lub klasy abstrakcyjnej do wygenerowania raportu, ale nie jest zależna od konkretnych klas szablonów raportu. Dzięki temu kod aplikacji jest bardziej elastyczny i łatwiejszy do zmiany, ponieważ można łatwo dodawać lub usuwać rodzaje raportów bez konieczności zmiany kodu klienta.