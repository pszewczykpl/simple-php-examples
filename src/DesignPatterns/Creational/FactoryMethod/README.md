# Factory Method (Metoda wytwórcza)
## Opis
Wzorzec projektowy "Metoda wytwórcza" (ang. Factory Method) to sposób tworzenia obiektów, który pozwala uniezależnić kod klienta od konkretnych klas, z których tworzone są obiekty. Dzięki temu kod jest bardziej elastyczny i łatwiejszy do zmiany, ponieważ zmiana sposobu tworzenia obiektów nie wpływa na kod klienta.

Wzorzec projektowy "Metoda wytwórcza" składa się z kilku elementów:
1. Interfejs lub klasa abstrakcyjna, definiująca metodę wytwórczą, która zwraca obiekt interfejsu lub klasy abstrakcyjnej.
2. Konkretne klasy implementujące interfejs lub dziedziczące po klasie abstrakcyjnej, które są odpowiedzialne za tworzenie konkretnych obiektów.
3. Klasa klienta, która korzysta z metody wytwórczej do tworzenia obiektów, ale nie jest zależna od konkretnych klas, z których tworzone są obiekty.

Przykładem zastosowania wzorca projektowego "Metoda wytwórcza" jest tworzenie obiektów reprezentujących różne rodzaje kształtów (np. kwadraty, koła, trójkąty) w programie do rysowania. Klasa klienta chce stworzyć nowy kształt, ale nie jest zależna od konkretnych klas reprezentujących poszczególne rodzaje kształtów. Zamiast tego korzysta z interfejsu lub klasy abstrakcyjnej, definiującej metodę wytwórczą, która zwraca odpowiedni obiekt reprezentujący kształt.