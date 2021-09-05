# ✅ PHP - PODSTAWY

```php
    $zmienna = "kropka służy do łączenia, zamiast plusa";
    echo("Echo służy do wyświetlania" . $zmienna);

    STALA_WARTOSC = 12.5;
    print("Print też służy do wyświetlania, np stałej liczbowej " . STALA_WARTOSC );

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