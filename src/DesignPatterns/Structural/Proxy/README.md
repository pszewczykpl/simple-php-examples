# Pełnomocnik
## Opis
Wzorzec projektowy "Pełnomocnik" (ang. Proxy) to sposób na udostępnienie obiektowi alternatywnego interfejsu do jego wykorzystania. Pełnomocnik udostępnia ten alternatywny interfejs poprzez implementację tego samego interfejsu co obiekt, a następnie delegowanie wywołań do obiektu. Wzorzec ten pozwala na dodawanie dodatkowych operacji do obiektu bez zmiany jego kodu źródłowego.

Wzorzec projektowy "Pełnomocnik" składa się z następujących elementów:
1. Interfejs lub klasa abstrakcyjna pełnomocnika, definiująca metody do pracy z obiektem.
2. Klasa konkretna pełnomocnika, implementująca interfejs lub dziedzicząca po klasie abstrakcyjnej i zawierająca pole zawierające instancję obiektu. Klasa pełnomocnika implementuje metody interfejsu lub klasy abstrakcyjnej i deleguje wywołania do obiektu.
3. Interfejs lub klasa abstrakcyjna obiektu, definiująca metody do pracy z obiektem.
4. Klasa konkretna obiektu, implementująca interfejs lub dziedzicząca po klasie abstrakcyjnej i zawierająca kod do wykonania konkretnych operacji na obiekcie.
5. Klasa klienta, która korzysta z interfejsu lub klasy abstrakcyjnej pełnomocnika i wywołuje metody na jego instancji, aby wykonać operacje na obiekcie.

Przykładem zastosowania wzorca projektowego "Pełnomocnik" jest tworzenie aplikacji do zarządzania bazą danych użytkowników. Obiekt to klasa zawierająca kod do obsługi bazy danych użytkowników, a pełnomocnik to klasa zapewniająca alternatywny interfejs do obsługi bazy danych użytkowników. Pełnomocnik może zawierać dodatkowe operacje, takie jak sprawdzanie poprawności hasła przed zapisaniem go do bazy danych, a także może ukrywać szczegóły implementacji obiektu przed klientem. Klasa klienta korzysta z interfejsu lub klasy abstrakcyjnej pełnomocnika i wywołuje metody na jego instancji, aby wykonać operacje na bazie danych użytkowników, bez konieczności znajomości szczegółów implementacji obiektu.