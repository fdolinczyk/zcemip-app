# Projekt ZCEMIP

## Opis projektu

Projekt **ZCEMIP** to nowoczesna aplikacja internetowa skupiona na responsywnym układzie logowania, wykorzystująca dynamiczne tła oraz zaawansowane style CSS. Aplikacja zawiera panel administratora, umożliwiający przeglądanie użytkowników oraz zarządzanie ich danymi. Projekt został stworzony z myślą o funkcjonalności i prostocie obsługi.

## Funkcjonalności

- **Responsywny design**: Aplikacja dostosowuje się do urządzeń mobilnych, tabletów oraz komputerów stacjonarnych.
- **Panel logowania**: Umożliwia użytkownikom dostęp do systemu z autoryzacją.
- **Panel administratora**: Daje możliwość zarządzania użytkownikami i ich danymi.

## Panel administratora

Panel administratora jest dostępny pod adresem:
`/panel`

Dane logowania do panelu administratora (domyślne):
- **Login**: root
- **Hasło**: root

Dane te znajdują się w pliku SQL załączonym do projektu i można je zmodyfikować po zaimportowaniu bazy danych.

## Bazy danych

Projekt wykorzystuje jedną dedykowaną bazę danych:
- **zcemip**: Przechowuje dane użytkowników, takie jak login, email, hasło oraz przypisaną grupę użytkownika.

### Import bazy danych

Aby skonfigurować bazę danych:
1. Otwórz narzędzie phpMyAdmin lub inne oprogramowanie do zarządzania bazami danych.
2. Stwórz bazę danych o nazwie `zcemip`.
3. Zaimportuj plik `zcemip.sql`, który zawiera strukturę tabel oraz przykładowe dane.

## Technologie użyte w projekcie

- **HTML5, CSS3, JavaScript**: Podstawa warstwy front-end.
- **Bootstrap**: Tworzenie responsywnego designu.
- **PHP**: Backend aplikacji.
- **MySQL**: Zarządzanie danymi użytkowników.

## Jak rozpocząć

1. Sklonuj repozytorium.
2. Skonfiguruj serwer lokalny obsługujący PHP (np. XAMPP).
3. Utwórz bazę danych i zaimportuj plik `zcemip.sql`.
4. Przejdź do `/panel`, aby uzyskać dostęp do panelu administratora.

---
