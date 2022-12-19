# Most (Bridge)
## Opis
Wzorzec projektowy "Most" (ang. Bridge) to sposób na oddzielenie abstrakcji od jej implementacji, dzięki czemu abstrakcja i implementacja mogą być rozwijane niezależnie od siebie. Wzorzec ten pozwala na łatwe zmienianie implementacji bez wpływu na kod klienta korzystającego z abstrakcji.

Wzorzec projektowy "Most" składa się z następujących elementów:

1. Interfejs abstrakcji, definiujący metody, które będą używane przez klienta.
2. Klasa abstrakcji, która implementuje interfejs abstrakcji i posiada pole zawierające referencję do obiektu implementacji. Klasa abstrakcji przekazuje wywołania metod do obiektu implementacji.
3. Interfejs implementacji, definiujący metody, które będą używane przez klasę abstrakcji do wykonania konkretnych operacji.
4. Klasy implementacji, które implementują interfejs implementacji i zawierają kod do wykonania konkretnych operacji.
5. Klasa klienta, która korzysta z interfejsu abstrakcji i wywołuje metody na instancji klasy abstrakcji.

Przykładem zastosowania wzorca projektowego "Most" jest tworzenie aplikacji do rysowania różnych rodzajów figur (np. kwadratów, koła, trójkątów). Klasa abstrakcji definiuje interfejs do rysowania figur, a klasy implementacji zawierają kod do rysowania konkretnych figur. Dzięki temu możliwe jest dodawanie nowych rodzajów figur do aplikacji bez konieczności zmiany kodu klienta korzystającego z interfejsu abstrakcji do rysowania figur.