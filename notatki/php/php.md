# ✅ PHP - PODSTAWY

```php
/* METODY UMIESZCZANIA PHP
    1) <?php ?> (TEGO DZIŚ UŻYWAMY)
    2) <% %>
    3) <script lang="php"></script>
*/

    $zmienna = "kropka służy do łączenia, zamiast plusa";
    echo("Echo służy do wyświetlania" . $zmienna);

    STALA_WARTOSC = 12.5;
    print("Print też służy do wyświetlania, np stałej liczbowej " . STALA_WARTOSC );

```

# ✅ OPERATORY

```php

//LOGICZNE
&& AND - iloczyn sumy
|| OR - suma logiczna
NOT ! - zaprzeczenie
XOR xor - różnica symetryczna

//BITOWE
& - AND wyswietla 1 jezeli obie storny wysznosza 1
^ - XOR wyswietla 1 jesli jedna ze zmiennych (ale nie obie jednoczesnie wynosi 1)
| - OR wyświetla 1 jeśli jedna ze zmiennych wynosi 1
~  - NOT ustawia dla zmienej wszystkie wartosci 1 na 0 wszyskie 0 na 1
<< - wykonuje przesuniecie o 1 bit w lewo
>> - wykonuje przesuniecie o 1 bit w prawo

//INKREMENTACJI
$i++ postinkrementacja zwraca zmienna a nasteonie zwieksza ja o 1
++$i preinkrementacja zmienia wartość zmiennej o 1, a następnie zwraca zmienna
$i-- postdekrementacja zwraca zmienna a nastepnie zmiejsza ja o 1
--$i predekrementacja zwraca wartosc zmiennej -1 , a nastęnie zwraca zmienną

//PRZYPISANIA
=
+=
-=
*=
/=

// PORÓWANIANIA
== - równe
<= - mniejsze równe
>= - większe równe
< - mniejsze
> - większe

//ARYTMETYCZNE
+ - suma
-   różnica
* - operator mnożenia
/ - operator dzielenia
% - reszta dzielenia (modulo)
\ - wynik dzielenia bez reszty (divation)



```

# ✅ PHP - PĘTLE

WP- Warunek Początkowy
\
WS - Warunek Sterujący
\
WM - Warunek Mdyfikujący

## PĘTLA FOR
```php
for($i=0;$i<10;$i++){
    echo($i . ".To jest petla FOR");
}
```
## PĘTLA WHILE
```php
$i=0; //WP
while($i<10>) //WS
{
    echo($i . ".To jest petla WHILE");
    $i++; //WM
}
```

## PĘTLA DO-WHILE
Ta pętla jako jedyna wykonuje się MINIMUM raz
```php
$i = 0; //WP
do
{
    echo($i . ".To jest petla DO-WHILE");
    $i++; //WM
}
while($i<10); //WS


```

# ✅ INSTRUKCJA WARUNKOWA

## IF, ELSE
```PHP
    // instrukcja if
    if($zmienna==0)
    {
        echo("Jest to instrukcja warunkowa is");
    }

    //instrukcja if złożona
    if($zmienna==0)
    {
        echo("Jest to instrukcja is");
    }
    else
    {
        echo("Jest to else");
    }

    //instrukcja if złożona - kilka elemntów

    if($zmienna==0){
        echo("Jest to 0");
    }
    elseif($zmienna==2){
        echo("Jest to 2");

    }
    elseif($zmienna==5){
        echo("Jest to 5");

    }
    else{
        echo("Jest to else");
    }

```


## SWITCH CASE
JEŚLI $zmienna==0 WYBIERZ CASE 1: itp
```php
switch($zmienna)
{
    case 1:{
        echo "Wybrano opcję pierwszą";
        break;
    }
    case 2:{
        echo "Wybrano opcję pierwszą";
        break;
    }
    default:{
        echo "Nie wybrano żadnej opcji";
        break;
    }
}
```

#  ✅ TABLICE 

- jest to zmienna strukturalna
- zmienna przechowująca zbiór określnonych wartośći i elementów
- do każdej z wartości można się odwołać po indexie
- INDEXY numerowane są od zera
- wobec miej obowiązuja te same reguły co do zmiennych prostych 

```php
//pierwszy sposób deklaracji tablicy
$nazwa_tablivy =array(element, element2);

// inny sposób
$nazwa_tablicy[0]=element1;
$nazwa_tablicy[1]=element2;


// metody
rand(1, 49) //zwraca losowa liczbe z przedzialu dwoch liczb
sort($nazwa_tablicy) //sortowanie rosnące
rsort($nazwa_tablicy //sortowanie malejące
```

### Przykład 1.
```php

$Lista = array("Mleko","Chleb","Pasztet","Śledź");

echo "<h1>Lista zakupów: </h1>";

// petla_for_klasyczna
for($i=0; $i<=3; $i++)
{
    echo $Lista[$i] . "<br>";
}

//petla_foreach_wszystkie_elementy
foreach($Lista as $produkt)
{
    echo $produkt . "<br>";
}





```