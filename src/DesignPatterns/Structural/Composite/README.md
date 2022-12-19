# Kompozyt (Composite)
## Opis
Wzorzec projektowy "Kompozyt" (ang. Composite) jest sposobem na tworzenie struktur drzewiastych z obiektów tak, aby mogły one być traktowane jednakowo, niezależnie od tego, czy są pojedynczymi obiektami, czy też złożonymi z innych obiektów. Wzorzec ten umożliwia klientowi pracę z pojedynczymi obiektami i ich złożeniami w taki sam sposób.

Wzorzec projektowy "Kompozyt" składa się z następujących elementów:

1. Interfejs komponentu, definiujący metody, które będą używane przez klienta do pracy z obiektami.
2. Klasa komponentu, implementująca interfejs komponentu i zawierająca pole zawierające listę potomków tego obiektu oraz metody do dodawania i usuwania potomków.
3. Klasa kompozytu, dziedzicząca po klasie komponentu i implementująca dodatkowe metody do pracy z potomkami.
4. Klasa liścia, dziedzicząca po klasie komponentu i nie posiadająca potomków.
5. Klasa klienta, która korzysta z interfejsu komponentu i wywołuje metody na instancjach klasy komponentu lub klasy kompozytu.

Przykładem zastosowania wzorca projektowego "Kompozyt" jest tworzenie aplikacji do zarządzania strukturą plików i folderów w systemie operacyjnym. Klasa komponentu definiuje interfejs do pracy z plikami i folderami, a klasa kompozytu implementuje metody do dodawania i usuwania plików i folderów oraz przeglądania ich zawartości. Klasa liścia odpowiada za pliki, które nie posiadają potomków. Dzięki temu klient może pracować z pojedynczymi plikami i folderami oraz ich złożeniami w taki sam sposób.