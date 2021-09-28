# ✅ EGZAMIN 

### Tworzenie użytkownika
```SQL
CREATE USER 'fryzjer'@'localhost'
IDENTIFIED BY 'Fryz12'
;
```

### Nadwanie uprawnień
```sql
GRANT CREATE, ALTER, SELECT
ON egzamin.liga
TO 'fryzjer'@'localhost'

;
GRANT ALL PRIVILEGES ON PtakiPolskie.* TO 'filip'@'localhost';
```

### Wyczyszczenie tabeli z danych
```sql
TRUNCATE TABLE rozgrywka
;
```



# ✅KLAUZULE

```SQL
• LIKE --nazwisko like '%a' or nazwisko like 'a%';

• ORDER BY
- ASC (ascending) rosnąco.
- DESC (descending) malejąco

• HAVING --filtrowanie grup count(id_prac);

• GROUP BY -- limit 10 ; na samym koncu;

• LIMIT -- limit 10 ; na samym koncu;
```


# ✅ FUNKCJE

## TESKTOWE
```sql
-- MANIPULACJA NA CIĄGACH
• reverse(); = odwraca znaki
• left(nazwisko, 2)
• right(nazwisko, 2)
• mid('Ala ma kota',2,5),
• substr(),substring()

• LPAD(nazwisko,20,'#');
• RPAD(nazwisko,20,'?');
• SPACE(12);
• REPEAT('-',10);

-- FUNKCJA CONCAT
• CONCAT() = łączenie ciągów
• CONCAT_WS('<---->',) = łączenie ciągów z separatorem

-- WIELKOSĆ LITER
• LOWER(),LCASE()= małe litery;
• UPPER(),UCASE() = duze litery;

-- DŁUGOSĆ CIĄGU
• length();
• bit_length();
• octet_length();
• char_length();
• character_length();
• TRIM() = usuwa puste znaki na poczatku i na koncu;
```

##  AGREGUJĄCE
```SQL
• ROUND(5.7876, 2) - zaokrogla liczby;

• COUNT() - liczy wystapienia;

• SUM() - sumuje;

• MIN() - zwraca najsmiejsza wartosc;

• MAX() - zwraca najwieksza wartosc;

• AVG() - wylicza srednia;
```

## DATY I CZASU
```SQL
• timestampdiff(year, DataUrodzenia, Now());

//access Dni: DateDiff('d';[DataWypozyczenia];Now())

---FUNKCJE NA REKORDACH
• hour(), minute(), second();
• day(), year(), month();
• dayname(), monthname();
• dayofWeek()

---AKTUALNY CZAS
• now() = DATA i CZAS;
• curtime() = CZAS;
• curdate() = DATA;
LUB
• current_time = CZAS
• current_data = DATA
```

# ✅ INSTRUKCJE STERUJACE
## IF:
```SQL
• IF(wiek>=18,'pelnoletni','niepelnoletni');

```
## SWITCH:
```SQL
--SKŁADNIA1
CASE
  WHEN cena=15 THEN 'ROWNA'
  WHEN cena>15 THEN 'WYZSZA'
  ELSE 'MNIEJSZA'
END


---SKŁADNIA2
CASE imie
  WHEN 'Janek' THEN 'Hej B.'
  WHEN 'Adam' THEN 'Hej A.'
  ELSE 'MNIEJSZA'
END

```

## NULL
```SQL

--IFNULL

Zwraca podaną wartość jeśli aktualna jest NULL
• IFNULL(stanowisko,'BRAK')

--NULLIF

W podaną wartość zwraca NULL
• NULLIF(imie,'JAN')

```

# ✅ OPERATORY
```SQL
---ARYTMETYCZNE
• =  wiekszy badz rowny
• <=  badz mnniejeszy lub równy
• = równy
• !=, <> różny od
• %, MOD  reszta z dzielenia modulu

---LOGICZNE
• AND, &&
cena>100 and cena < 200;

• OR, ||
cena > 100 or cena< 200;

• BETWEEN
cena between 100 and 200;

• IN
picie in('kawa','herbata');

• NOT IN
picie not in('kawa','herbata');

• IS
herbata is true; //lub flase;

• LIKE = (nazwisko like '%a' or nazwisko like 'a%' );

```

## NAWIGACJA

```TXT
• show databases;
• use nazwa_bazy;
• conect nazwa_bazy;
• show tables;
• describe nazwa_tabeli;
```