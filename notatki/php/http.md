# ✅ Formularze

```php
// FORMULARZE
$_POST[] //niewidoczne 
$_GET[] //widoczne w paskku adresu ?strona=kontakt 
isset() //sprawdza czy zmienna ma ustawiona wartosc
empty() //sprawdza czy zmienna jest pusta

str_replace(',','.',$zmienna) //zmienia znak
settype($zmienna, 'double') //ustawia typ zmiennej
round($zmienna, 3) //zaakrogla zmienna

rand(1, 49) //zwraca losowa liczbe z przedzialu dwoch liczb
sort($nazwa_tablicy) //sortowanie rosnące
rsort($nazwa_tablicy //sortowanie malejące

date('Y-m-d') //zwraca dane w podanym formacie 

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

# PRZYKAŁADY
Formularz POST
```html

<form action="plik.php" method="POST">
    <div>
        <label for="imie">Imię: </label>
        <input type="text" name="imie">
     </div>
     <div>
        <label for="nazwisko">Nazwisko: </label>
        <input type="text" name="nazwisko">
      </div>
    <div>
        <label for="wiek">Wiek: </div>
        <input type="number" name="wiek">
    </div>
    <input type="submit" value="Ustaw">
</form>

```

```php

<?php
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$wiek = $_POST['wiek'];


if(
    isset($_POST['imie'])  &&  isset($_POST['nazwisko']) && isset($_POST['wiek'])
)
{
    echo "
    Twoje imię to $imie <br>
    Twoje nazwisko to $nazwisko <br>
    Twój wiek to $wiek lat
    ";
}
else{
    echo "Ustaw wartości w formularzu!";
}
?>

```