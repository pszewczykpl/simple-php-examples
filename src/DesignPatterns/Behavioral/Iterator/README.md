# Iterator
## Opis
Wzorzec projektowy "Iterator" (ang. Iterator) to sposób na dostęp do elementów kolekcji obiektów bez konieczności znajomości sposobu ich implementacji. Iterator umożliwia przejście po elementach kolekcji w określonej kolejności i udostępnia interfejs do pobierania bieżącego elementu oraz przechodzenia do następnego elementu.

Wzorzec projektowy "Iterator" składa się z następujących elementów:
1. Interfejs iteratora, definiujący metody do przeglądania elementów kolekcji.
2. Klasa konkretna iteratora, implementująca interfejs iteratora i zawierająca kod do przeglądania elementów kolekcji.
3. Interfejs kolekcji, definiujący metodę do tworzenia iteratora.
4. Klasa konkretna kolekcji, implementująca interfejs kolekcji i zawierająca kod do przechowywania elementów oraz tworzenia iteratora.

Przykładem zastosowania wzorca projektowego "Iterator" jest aplikacja do przeglądania listy kontaktów w telefonie. Kolekcją jest lista kontaktów, a iteratorem jest obiekt umożliwiający przejście po elementach listy i pobranie bieżącego kontaktu. Klasa konkretna iteratora zawiera kod do przechowywania bieżącego indeksu na liście i metody do przechodzenia do następnego elementu oraz pobierania bieżącego elementu. Klasa konkretna kolekcji zawiera kod do przechowywania elementów na liście i tworzenia iteratora. Dzięki temu kod aplikacji do przeglądania listy kontaktów jest odłączony od kodu implementacji listy kontaktów i może być dynamicznie zmieniany, bez konieczności modyfikowania kodu listy kontaktów.