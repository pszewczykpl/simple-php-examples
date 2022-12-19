# Interpreter
## Opis
Wzorzec projektowy "Interpreter" (ang. Interpreter) to sposób na interpretowanie ciągów znaków, takich jak polecenia lub wyrażenia, przez obiekt, który jest odpowiedzialny za ich analizę i wykonanie odpowiednich działań. Wzorzec ten pozwala na oddzielenie kodu analizy i wykonywania poleceń od ich treści, co umożliwia łatwą zmianę sposobu interpretacji poleceń bez konieczności modyfikowania kodu ich wykonywania.

Wzorzec projektowy "Interpreter" składa się z następujących elementów:
1. Interfejs lub klasa abstrakcyjna interpretatora, definiująca metodę do interpretacji ciągu znaków.
2. Klasy konkretne interpretatorów, implementujące interfejs lub dziedziczące po klasie abstrakcyjnej i zawierające kod do analizy i wykonywania konkretnych poleceń lub wyrażeń.
3. Klasa kontekstu, przechowująca informacje potrzebne do interpretacji ciągu znaków.
4. Klasa klienta, która tworzy obiekt kontekstu i obiekt interpretatora oraz wywołuje metodę interpretacji w celu wykonania poleceń lub obliczenia wyrażenia.

Przykładem zastosowania wzorca projektowego "Interpreter" jest aplikacja do rysowania na podstawie ciągów znaków wejściowych, takich jak "Rysuj kwadrat o boku 2" lub "Rysuj koło o promieniu 3". Klasa kontekstu przechowuje informacje o ciągu znaków wejściowych oraz o bieżącym położeniu w ciągu. Klasy interpretatorów zawierają kod do analizy ciągu znaków i wykonywania poleceń rysowania kształtów. Klasa klienta tworzy obiekt kontekstu z ciągiem znaków wejściowymi oraz obiekt interpretatora i wywołuje metodę interpretacji, aby wykonać polecenie rysowania. Dzięki temu kod aplikacji do rysowania jest odłączony od kodu interpretacji poleceń i może być dynamicznie zmieniany, bez konieczności modyfikowania kodu interpretacji poleceń.