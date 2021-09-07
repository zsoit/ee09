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
& - AND wyswietla 1 jezeli obie storny wysznosza 1
^ - XOR wyswietla 1 jesli jedna ze zmiennych (ale nie obie jednoczesnie wynosi 1)
| - OR wyświetla 1 jeśli jedna ze zmiennych wynosi 1
! - NOT ustawia dla zmienej wszystkie wartosci 1 na 0 wszyskie 0 na 1

//BITOWE
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

//OPERATORY PORÓWANIANIA
== - równe
<= - mniejsze równe
>= - więskze równe
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
Ta pętla jako jedyna wykonuje się tylko raz
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

# ✅  TABILCE HTTP

```php
// FORMULARZE
$_POST[]
$_GET[]
isset() //sprawdza czy zmienna ma ustawiona wartosc
empty() //sprawdza czy zmienna jest pusta

// PLIKI COOKIES/CIASTECZKA
$_COOKIES[]
setcookie()
setcookie("user", "", time() - 3600); // usuwanie ciasteczka po godzinie

// ZMIENNE SESYJNE
$_SESION[]
session_start();
session_unset(); // usuwa wszystkie zminne sesyjne
session_destroy(); // niszczy sesje


// INFORMACJE Z SERWERA
$_SERVER['PHP_SELF'];
$_SERVER['SERVER_NAME'];
$_SERVER['HTTP_HOST'];
$_SERVER['HTTP_REFERER'];
$_SERVER['HTTP_USER_AGENT'];
$_SERVER['SCRIPT_NAME'];
```