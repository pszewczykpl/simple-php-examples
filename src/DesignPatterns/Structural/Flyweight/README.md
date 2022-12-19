# Pyłek
## Opis
Wzorzec projektowy "Pyłek" (ang. Flyweight) jest sposobem na optymalizację aplikacji poprzez dzielenie obiektów na dwie kategorie: obiekty z stałymi danymi i obiekty z danymi zmiennymi. Obiekty z stałymi danymi są współdzielone przez wszystkie instancje obiektu, dzięki czemu możliwe jest zmniejszenie ilości pamięci potrzebnej do ich przechowywania.

Wzorzec projektowy "Pyłek" składa się z następujących elementów:
1. Interfejs lub klasa abstrakcyjna pyłka, definiująca metody do pracy z obiektami z stałymi danymi.
2. Klasa konkretna pyłka, implementująca interfejs lub dziedzicząca po klasie abstrakcyjnej i zawierająca dane stałe oraz metody do pracy z nimi.
3. Klasa fabryki pyłka, odpowiedzialna za tworzenie i zarządzanie obiektami pyłka. Fabryka tworzy nowy obiekt pyłka tylko wtedy, gdy nie ma już istniejących obiektów o takich samych danych stałych. W przeciwnym razie zwraca istniejący obiekt o takich samych danych stałych.
4. Klasa klienta, która korzysta z fabryki pyłka do tworzenia obiektów pyłka i wywołuje metody na ich instancjach.

Przykładem zastosowania wzorca projektowego "Pyłek" jest tworzenie aplikacji do zarządzania bazą danych produktów w sklepie internetowym. Każdy produkt ma swoje unikalne dane, takie jak nazwa, opis, cena itp., ale wiele produktów może mieć takie same dane, takie jak kategoria czy producent. Klasa pyłka zawiera dane stałe, takie jak kategoria i producent, a fabryka pyłka tworzy nowe obiekty tylko wtedy, gdy nie ma już istniejących obiektów o takich samych danych stałych. Dzięki temu możliwe jest zmniejszenie ilości pamięci potrzebnej do przechowywania produktów o takich samych danych stałych. Klasa klienta korzysta z fabryki pyłka do tworzenia obiektów produktów i wywołuje metody na ich instancjach, aby uzyskać dostęp do danych produktów lub dokonać zmian w nich.

Należy pamiętać, że wzorzec projektowy "Pyłek" jest skuteczny tylko wtedy, gdy ilość obiektów pyłka jest znaczna, a ich dane stałe stanowią znaczącą część ich całkowitej objętości. W przeciwnym razie koszt tworzenia i zarządzania obiektami pyłka może być większy niż korzyści płynące z optymalizacji pamięci.