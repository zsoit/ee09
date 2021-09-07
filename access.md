# Microsoft Access


## ✅ KWERENDY
```sql
Pole: Wyr1:[zysk]-[cena]

-- INSTRUKCJA IF
=IIf([KrajRegion]="Włochy", "Włoski", "Inny język")

-- Operator: \ -  DIV (Division)

-- KONSTRUKTOR WYRAŻEŃ
liczba całkowita:
Pole: Funkcje->Funkcje_wbudowane->Konwersja->Clnt
    lub
Pole: cint(cena)

-- ARKUSZ WŁAŚCIWOŚCI
format: Walutowy
format; data-średnia

-- KILKA KWEREND W JEDNYM ATRYBUCIE
Pole: Wyr2:[nazwisko]+" "+[telefon]+" "+ [imie]
lub
Pole: Wyr2:[nazwisko]&" "&[telefon]&" "& [imie]
Wyr2:[tabela]![atrybut]


-- DISTINCT - USUWA DUPLIKATY
Widok SQL = SELECT DISTINCT
Kryteria: Is not Null


-- JAKIŚ CIĄG ZNAKÓW
Kryteria: like * & cos & *


-- LIMITOWANIE
Sortowanie: Rosnące/Malejące
Zwróć: 3
w SQL TOP 3

-- ILE JEST FILMÓW W POSZCZEGÓLNYCH GATUNKACH?
Gatunek, IdFilmu -> SUMY Policz

-- OKNO Z OPCJĄ WPISANIA FILMU
Kryteria: [Proszę dodać imię aktora:
```