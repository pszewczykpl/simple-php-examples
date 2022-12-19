# Specyfikacja
## Opis
Wzorzec projektowy "Specyfikacja" (ang. Specification) to sposób na reprezentowanie warunków, które muszą być spełnione przez obiekt, za pomocą oddzielnej klasy lub interfejsu. Wzorzec ten pozwala na łatwe tworzenie i modyfikowanie warunków filtrowania obiektów, a także umożliwia kompozycję tych warunków w celu stworzenia bardziej złożonych kryteriów.

Wzorzec projektowy "Specyfikacja" składa się z następujących elementów:
1. Interfejs lub klasa abstrakcyjna, definiująca metodę lub właściwość, która zwraca true lub false w zależności od tego, czy obiekt spełnia warunki specyfikacji.
2. Konkretne klasy implementujące interfejs lub dziedziczące po klasie abstrakcyjnej, reprezentujące różne warunki specyfikacji.
3. Klasa lub metoda klienta, korzystająca z interfejsu lub klasy abstrakcyjnej do sprawdzenia, czy obiekt spełnia warunki specyfikacji.

Przykładem zastosowania wzorca projektowego "Specyfikacja" jest aplikacja do wyszukiwania produktów w sklepie internetowym. Klasa produktu jest obiektem, a klasa specyfikacji produktu jest interfejsem lub klasą abstrakcyjną, definiującą metodę lub właściwość, która zwraca true lub false w zależności od tego, czy produkt spełnia warunki specyfikacji. Konkretne klasy specyfikacji produktu reprezentują różne warunki, np. produkty o określonej cenie, kategorii lub producentach. Klasa lub metoda klienta korzysta z interfejsu lub klasy abstrakcyjnej do sprawdzenia, czy produkt spełnia warunki specyfikacji i wyświetla go na liście wyników wyszukiwania. Dzięki temu kod aplikacji jest bardziej elastyczny i łatwiejszy do zmiany, ponieważ można łatwo dodawać lub usuwać warunki specyfikacji bez konieczności zmiany kodu klienta. Można również łatwo skomponować warunki specyfikacji w celu stworzenia bardziej złożonych kryteriów wyszukiwania, np. produkty o cenie poniżej 100 złotych i kategorii elektronika.