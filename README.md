# Orchestra Excerpt Practice

## Opis Projektu
Orchestra Excerpt Practice to aplikacja internetowa umożliwiająca użytkownikom przeglądanie, dodawanie oraz komentowanie fragmentów utworów orkiestrowych. Projekt został stworzony z wykorzystaniem technologii: HTML, CSS, PHP, PostgreSQL oraz JavaScript.

## Funkcjonalności
- Rejestracja i logowanie użytkowników
- Przeglądanie bazy fragmentów muzycznych
- Wyszukiwanie fragmentów
- Dodawanie fragmentów przez użytkowników
- Ocenianie fragmentów (like i dislike)
- Możliwość dodawania komentarzy pod fragmentami
- Responsywne UI przystosowane do urządzeń mobilnych

## Wymagania
- PHP 7+
- PostgreSQL 13+
- Docker (do uruchomienia aplikacji w kontenerze)

## Instalacja
1. **Sklonuj repozytorium:**
   ```sh
   git clone https://github.com/user/orchestra-excerpts.git
   cd orchestra-excerpts
   ```
2. **Zainstaluj zależności PHP:**
   
3. **Skonfiguruj bazę danych:**
   - Utwórz bazę danych w PostgreSQL
   - Uruchom skrypt SQL znajdujący się w pliku `database/schema.sql`

4. **Uruchom aplikację:**


## Struktura Kodu
### Backend:
- `index.php` - Punkt wejściowy aplikacji
- `Routing.php` - Obsługa trasowania URL
- `AppController.php` - Klasa bazowa dla kontrolerów
- `ExcerptController.php` - Kontroler obsługujący fragmenty muzyczne
- `SecurityController.php` - Kontroler odpowiedzialny za logowanie/rejestrację
- `Database.php` - Obsługa połączenia z bazą danych
- `Repository.php`, `ExcerptRepository.php`, `UserRepository.php` - Klasy ORM do obsługi bazy danych

### Frontend:
- `menu.js` - Obsługa menu nawigacyjnego, rozwijanego w trybie mobilnym
- `script.js` - Walidacja formularzy
- `search.js` - Obsługa wyszukiwania fragmentów
- `styl.css`, `login.css` - Pliki stylów CSS

## Uruchamianie w Dockerze
1. Uruchomienie kontenerów:
   ```sh
   docker-compose up -d
   ```
2. Sprawdzenie logów:
   ```sh
   docker-compose logs -f
   ```
3. Aplikacja będzie dostępna pod adresem `http://localhost:8000`

## Autor
- **Ziemowit Gołojuch**

## Screenshoty
Screenshoty są dołączone w repozytorium w folderze `screenshots/`, a opisy znajdują się tutaj:

