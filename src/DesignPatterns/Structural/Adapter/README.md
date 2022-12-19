# Adapter
## Opis
Wzorzec projektowy "Adapter" (ang. Adapter) jest sposobem na dostosowanie interfejsu jednej klasy do innego interfejsu, którego oczekuje klient. Pozwala to na współpracę klas, które w innym przypadku nie mogłyby ze sobą współpracować ze względu na różnice w ich interfejsach.

Wzorzec projektowy "Adapter" składa się z następujących elementów:

1. Klasa adaptowana, która posiada interfejs niezgodny z interfejsem oczekiwanym przez klienta.
2. Klasa adapter, która dziedziczy lub implementuje interfejs oczekiwany przez klienta oraz posiada pole zawierające instancję klasy adaptowanej. Klasa adapter przekazuje wywołania metod klienta do odpowiednich metod klasy adaptowanej, tak aby zapewnić zgodność interfejsu.
3. Klasa klienta, która korzysta z interfejsu oczekiwanego przez klienta i wywołuje metody na instancji klasy adapter.

Przykładem zastosowania wzorca projektowego "Adapter" jest tworzenie aplikacji do obsługi różnych drukarek. Klient chce wywołać metodę drukującą na drukarce, ale każda drukarka posiada inny interfejs. Klasa adapter tworzy interfejs oczekiwany przez klienta i przekazuje wywołania metod drukujących do odpowiednich metod na drukarce. Dzięki temu klient może drukować na różnych drukarkach bez konieczności zmiany kodu.