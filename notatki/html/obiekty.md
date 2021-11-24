# Obiekty w JavaScript

## Obiekt
Przykład 1.
```html
<!--
Obiekat definijuemy jako specjalną funkcję
 - zwaną kontruktortem
 - nastepnie tworzmy operator new

this - paramtetr niejawny, obiekt na rzecz ktorego wykonyana jest metoda.
-->
<script>
    function komputer(procesor, zegar, cena) {
        this.procesor = procesor;
        this.zegar = zegar;
        this.cena = cena;
    }
    moj_komputer = new komputer("Celeron", "800", "2500 zł");
    document.write(`
    Procesor: ${moj_komputer.procesor} <br>
    Zegar: ${moj_komputer.zegar} <br>
    Cena: ${moj_komputer.cena} <br>
    `);
</script>
```

Przykład 2.
```html
<script>
    function firma(nazwa, dzial) {
        this.nazwa = nazwa;
        this.dzial = dzial;
    }
    var nazwa = prompt('Podaj nazwe firmy: ');
    var dzial = prompt('Podaj dział firmy: ');
    x = new firma(nazwa, dzial);
    document.write(`
    Nazwa firmy: ${x.nazwa} <br>
    Nazwa działu: ${x.dzial}
    `);
</script>


```

Przykład 3.
```html
<script>
    function Student(imie, nazwisko, wiek, stypendium, rok) {
        this.imie = imie;
        this.nazwisko = nazwisko;
        this.wiek = wiek;
        this.stypendium = stypendium;
        this.rok = rok;
    }
    var imie = prompt('Podaj imie: ');
    var nazwisko = prompt('Podaj nazwisko: ');
    var wiek = prompt('Podaj wiek: ');
    var stypendium = prompt('Podaj stypednium: ');
    var rok = prompt('Podaj rok studiów: ');

    osoba = new Student(imie, nazwisko, wiek, stypendium, rok);
    document.write(`
    Imię: ${osoba.imie.toUpperCase().fontcolor('green')} <br>
    Nazwisko: ${osoba.nazwisko.toUpperCase().fontcolor('yellow')} <br>
    Wiek: ${osoba.wiek.toUpperCase().fontcolor('blue')} <br>
    Stypendium: ${osoba.stypendium.toUpperCase().fontcolor('orange')} <br>
    Rok: ${osoba.rok.toUpperCase().fontcolor('gray')} <br>
    `);
</script>
```

## Obiekt: Data i czas

```html
<script>

    var czas = new Date();

    document.write
    (`
    <b>Rok</b>${czas.getFullYear()} <br>
    <b>Aktualny czas </b> ${czas.getHours()} : ${czas.getMinutes()} : ${czas.getSeconds()} <br>
    <b>Aktualny data: </b> ${czas.getDate()} <br>
    <b>Miesiąc</b> ${czas.getMonth()} <br>
    <b>Rok</b> ${czas.getFullYear()} <br>
    `)

</script>


```

## Obiekt: Math
Przykład 1
```html
<script>
    // obiekt math
    var a = prompt('Podaj pierwszą liczbę: ');
    var b = prompt('Podaj drugą liczbę: ');
    document.write(`
    Liczba a wynosi <b>${a}</b> <br>
    Liczba b wynosi <b>${b}</b> <br>
    Pierwiastek kwadratowy z liczby a wynosi <b>${Math.sqrt(a)}</b> <br>
    Liczba a do potęgi b wynosi <b> ${Math.pow(a,b)} </b> <br>
    Liczba a oraz b jest większa <b> ${Math.max(a,b)} </b> <br>
    `)
</script>
```
Przykład 2
```html
<script>
    // obiekt math
    var x = prompt('Podaj pierwszą liczbę: ');
    var y = prompt('Podaj drugą liczbę: ');
    document.write(`
    Liczba x=${x} <br> Liczba y=${y} <br>
    Najmniejsza liczba : <b> ${Math.min(x,y)} </b> <br>
    Liczba pseudolosowa : <b> ${Math.random(x,y)} </b> <br>
    Logarytm naturalny z x : <b>${Math.log(x)}</b>
    `)
</script>

```

## Obiekt : formularz


Przydatne funkcje

```html
<!--
FUNCKJE WBUDOWANE
parseINT() - pobiera argument typu tekstowego i konwertuje go na liczbę;
parseFloat() - pobiera argument typu tekstowego i konwertuje go na liczbę zmiennoprzecinkową i ułamkową
Number() - przekomwertuje argument na obiekt numeryczny;
isNan() - sprawdza czy wartosc podana jako parametr nie jest liczbą;
-->

````

Przykład 1

```html

<script>
    function przetwarzaj_dane(formularz) {
        if (formularz.imie.value == "") {
            alert('Podaj swoje imie!');
        } else {
            alert(`Twoje imie to: ${formularz.imie.value}`);
        }

    }
</script>

<h2>Podaj swoje imie: </h2>
<form name=formularz>
    <input type="text" name=imie> <br><br>
    <input type="button" value="Kliknij tutaj" onclick="przetwarzaj_dane(this.form)">
</form>

```

Przykład 2

```html

<script>
    function mnozenie(formularz) {
        var a = formularz.a.value;
        var b = formularz.b.value;
        if (a == "" || b == "") alert('Pola nie mogą być puste');
        else formularz.wynik.value = a * b;
    }
</script>

<form name=formularz>
    <label for="a">Podaj liczbę a:</label>
    <input type="number" name="a"> <br> <br>
    <label for="b">Podaj liczbę b:</label>
    <input type="number" name="b"> <br><br>
    <input type="button" value="Pomnóż" onclick="mnozenie(this.form)"> <br><br>
    <label for="wynik">Wynik: </label> <br>
    <input type="number" name=wynik>
</form>


```

