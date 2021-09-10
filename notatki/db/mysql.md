


# ✅KLAUZULE

```SQL
• LIKE = (nazwisko like '%a' or nazwisko like 'a%' );

• ORDER BY : ASC(rosnąco), DESC(malejąco);

• GROUP BY -- limit 10 ; na samym koncu;

• HAVING --filtrowanie grup count(id_prac);

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

## AGREGUJĄCE / MATEMATYCZNE
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