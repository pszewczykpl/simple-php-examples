# Polecenie (Command)
## Opis
Wzorzec projektowy "Polecenie" (ang. Command) to sposób na przechowywanie informacji o akcji, która ma być wykonana, oraz jej parametrów. Polecenie jest reprezentowane przez obiekt, który może być przekazywany do innych obiektów lub przechowywany w kolejce, aby było możliwe wykonanie akcji w późniejszym czasie. Wzorzec ten pozwala na odłączenie obiektu wywołującego akcję od obiektu, który ją wykonuje, co umożliwia dynamiczne zmiany sposobu wykonywania akcji.

Wzorzec projektowy "Polecenie" składa się z następujących elementów:
1. Interfejs lub klasa abstrakcyjna polecenia, definiująca metodę do wykonania akcji.
2. Klasy konkretne polecenia, implementujące interfejs lub dziedziczące po klasie abstrakcyjnej i zawierające kod do wykonania konkretnej akcji oraz informacje o jej parametrach.
3. Obiekt odbiorca, definiujący metody do wykonania akcji.
4. Klasa wywołująca, która tworzy obiekt polecenia i przekazuje go do obiektu odbiorcy w celu wykonania akcji.

Przykładem zastosowania wzorca projektowego "Polecenie" jest system obsługi poleceń do drukarki. Obiektem polecenia jest polecenie drukowania dokumentu, a obiektem odbiorcą jest drukarka. Klasa wywołująca tworzy obiekt polecenia i przekazuje go do obiektu odbiorcy w celu wydrukowania dokumentu. W ten sposób kod klasy wywołującej jest odłączony od kodu drukarki i może być dynamicznie zmieniany, bez konieczności modyfikowania kodu drukarki. Ponadto polecenie może być przechowywane w kolejce lub przekazywane do innych obiektów, takich jak menedżer drukarki, aby było możliwe wykonanie akcji w późniejszym czasie lub na innych drukarkach. Wzorzec projektowy "Polecenie" umożliwia również undo i redo, ponieważ obiekt polecenia może przechowywać informacje o tym, jakie akcje zostały wykonane i jakie parametry zostały użyte, co pozwala na cofnięcie lub ponowne wykonanie akcji.