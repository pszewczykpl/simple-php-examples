# Dekorator
## Opis
Wzorzec projektowy "Dekorator" (ang. Decorator) jest sposobem na dynamiczne dodawanie nowych funkcjonalności do obiektu bez zmiany jego kodu źródłowego. Pozwala to na rozszerzanie funkcjonalności obiektu poprzez dodawanie nowych "dekoratorów" do niego, a nie poprzez bezpośrednie modyfikowanie kodu obiektu.

Wzorzec projektowy "Dekorator" składa się z następujących elementów:
1. Interfejs komponentu, definiujący metody, które będą używane przez klienta do pracy z obiektami.
2. Klasa komponentu, implementująca interfejs komponentu i zawierająca podstawową funkcjonalność obiektu.
3. Klasa dekoratora, dziedzicząca po klasie komponentu i posiadająca pole zawierające instancję komponentu. Klasa dekoratora implementuje metody interfejsu komponentu i dodaje nową funkcjonalność poprzez wywoływanie odpowiednich metod na instancji komponentu.
4. Klasa klienta, która korzysta z interfejsu komponentu i wywołuje metody na instancjach klasy komponentu lub klasy dekoratora.

Przykładem zastosowania wzorca projektowego "Dekorator" jest tworzenie aplikacji do zamawiania kawy w kawiarni. Klasa komponentu to podstawowa kawa, a klasy dekoratorów to dodatki do kawy, takie jak mleko, cukier, czy kakao. Klient może zamówić podstawową kawę lub skorzystać z dekoratorów, aby dodać dodatki do swojej kawy. Dzięki temu możliwe jest rozszerzanie menu kawiarni poprzez dodawanie nowych dekoratorów, bez konieczności modyfikowania kodu klasy komponentu reprezentującej podstawową kawę.