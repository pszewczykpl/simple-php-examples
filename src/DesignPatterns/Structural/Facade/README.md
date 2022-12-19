# Fasada (Facade)
## Opis
Wzorzec projektowy "Fasada" (ang. Façade) to sposób na ukrycie złożoności systemu poprzez zapewnienie prostego i wygodnego interfejsu do jego wykorzystania. Wzorzec ten pozwala klientowi korzystać z systemu bez konieczności znajomości jego wewnętrznej struktury i działania.

Wzorzec projektowy "Fasada" składa się z następujących elementów:
1. Fasada, czyli klasa lub interfejs, który udostępnia prosty i wygodny interfejs do wykorzystania systemu. Fasada zawiera metody, które umożliwiają klientowi wykonanie zadanej operacji na 2 systemie, ale ukrywają jego wewnętrzną strukturę i działanie.
2. Klasy podsystemu, które zawierają kod do wykonania konkretnych operacji na systemie. Klasy podsystemu są używane przez fasadę do wykonania operacji, ale nie są bezpośrednio dostępne dla klienta.
3. Klasa klienta, która korzysta z fasady i wywołuje metody na jej instancji, aby wykonać operacje na systemie.

Przykładem zastosowania wzorca projektowego "Fasada" jest tworzenie aplikacji do obsługi sprzętu audio-wideo w domu. Fasada to klasa, która udostępnia prosty interfejs do włączania i wyłączania całego sprzętu audio-wideo oraz do ustawiania jego poszczególnych elementów (np. głośników, telewizora, odtwarzacza DVD). Klasy podsystemu to klasy odpowiedzialne za obsługę poszczególnych elementów sprzętu audio-wideo. Klient może skorzystać z fasady, aby w prosty sposób włączyć lub wyłączyć cały sprzęt audio-wideo bez konieczności znajomości jego wewnętrznej struktury i działania.