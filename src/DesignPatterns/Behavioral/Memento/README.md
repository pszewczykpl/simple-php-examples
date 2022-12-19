# Pamiątka
## Opis
Wzorzec projektowy "Pamiątka" (ang. Memento) to sposób na zapisanie i odtworzenie stanu obiektu bez ujawnienia szczegółów jego implementacji. Wzorzec ten pozwala na zapisywanie stanu obiektu w taki sposób, że jest on niezależny od pozostałych elementów systemu i może być odtworzony w dowolnym momencie bez konieczności modyfikowania kodu obiektu.

Wzorzec projektowy "Pamiątka" składa się z następujących elementów:
1. Klasa pamiątki (ang. Memento), przechowująca stan obiektu w sposób niezależny od pozostałych elementów systemu.
2. Klasa zarządcy pamiątek (ang. Caretaker), odpowiedzialna za zapisywanie i przywracanie stanu obiektu za pomocą pamiątek.
3. Klasa obiektu, którego stan jest zapisywany i odtwarzany. Obiekt ten tworzy pamiątki zawierające jego bieżący stan i udostępnia je zarządcy pamiątek do zapisania. Obiekt ten może też odtworzyć swój stan za pomocą pamiątki dostarczonej przez zarządcę pamiątek.

Przykładem zastosowania wzorca projektowego "Pamiątka" jest aplikacja do edytowania tekstu, która umożliwia cofnięcie zmian do poprzedniego stanu. Klasa edytora tekstu tworzy pamiątki zawierające bieżący stan tekstu i przekazuje je zarządcy pamiątek do zapisania. Klasa zarządcy pamiątek przechowuje pamiątki i umożliwia cofnięcie zmian do poprzedniego stanu, przywracając pamiątkę z odpowiedniego momentu. Dzięki temu kod edytora tekstu jest odłączony od kodu zarządzania pamiątkami i może być dynamicznie zmieniany, bez konieczności modyfikowania kodu cofania zmian.

Innym przykładem zastosowania wzorca projektowego "Pamiątka" jest aplikacja do projektowania domów, która umożliwia cofnięcie zmian do poprzedniego projektu. Klasa projektanta domów tworzy pamiątki zawierające bieżący projekt domu i przekazuje je zarządcy pamiątek do zapisania. Klasa zarządcy pamiątek przechowuje pamiątki i umożliwia cofnięcie zmian do poprzedniego projektu, przywracając pamiątkę z odpowiedniego momentu. Dzięki temu kod projektanta domów jest odłączony od kodu zarządzania pamiątkami i może być dynamicznie zmieniany, bez konieczności modyfikowania kodu cofania zmian.