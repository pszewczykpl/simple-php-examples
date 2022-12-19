# Budowniczy (Builder)
## Opis
Wzorzec projektowy "Budowniczy" (ang. Builder) to sposób tworzenia skomplikowanych obiektów, który pozwala na oddzielenie procesu tworzenia obiektu od jego reprezentacji. Dzięki temu kod jest bardziej elastyczny i łatwiejszy do zmiany, ponieważ zmiana sposobu tworzenia obiektu nie wpływa na jego reprezentację, a jedynie na proces tworzenia.

Wzorzec projektowy "Budowniczy" składa się z kilku elementów:
1. Klasa Budowniczy, która definiuje interfejs lub klasę abstrakcyjną dla procesu tworzenia obiektu.
2. Konkretne klasy Budowniczy, które implementują interfejs lub dziedziczą po klasie abstrakcyjnej Budowniczy i są odpowiedzialne za tworzenie konkretnych obiektów.
3. Klasa Produkt, która definiuje interfejs lub klasę abstrakcyjną dla reprezentacji obiektu.
4. Konkretne klasy Produkt, które implementują interfejs lub dziedziczą po klasie abstrakcyjnej Produkt i są odpowiedzialne za reprezentację konkretnych obiektów.
5. Klasa Kierownik, która korzysta z interfejsu lub klasy abstrakcyjnej Budowniczy, aby tworzyć obiekty według określonego procesu, ale nie jest zależna od konkretnych klas Budowniczy ani Produkt, z których tworzone są obiekty.

Przykładem zastosowania wzorca projektowego "Budowniczy" jest program do tworzenia dokumentów tekstowych. Klasa Kierownik korzysta z interfejsu lub klasy abstrakcyjnej Budowniczy, aby tworzyć nowy dokument według określonego procesu, ale nie jest zależna od konkretnych klas Budowniczy ani Produkt, z których tworzony jest dokument. Można zdefiniować różne klasy Budowniczy, odpowiedzialne za tworzenie dokumentów w różnych formatach (np. HTML, PDF) lub z różnymi opcjami (np. z podziałem na sekcje, bez podziału na sekcje). Klasa Kierownik może wybrać odpowiednią klasę Budowniczy w zależności od potrzeb i skorzystać z jej interfejsu lub klasy abstrakcyjnej, aby utworzyć nowy dokument. Klasa Budowniczy jest odpowiedzialna za tworzenie dokumentu według określonego procesu, a klasa Produkt za jego reprezentację. Dzięki temu kod jest bardziej elastyczny i łatwiejszy do zmiany, ponieważ zmiana sposobu tworzenia dokumentu nie wpływa na jego reprezentację, a jedynie na proces tworzenia.