# ✅ JavaScript

### Zdarzenia/Eventy
```js
// myszka
onclick //klikniecie
onmouseover //najechanie myszką na obiekt
onmouseout //odjechanie myszką od obiektu
```

### Funkcje wbudowane
```js
//PODSTAWOE
document.write()
document.getElementById()
prompt()
alert()

//MATEMATYCZNE
parseINT() //pobiera argument typu tekstowego i konwertuje go na liczbę;
parseFloat() //pobiera argument typu tekstowego i konwertuje go na liczbę zmiennoprzecinkową i ułamkową
Number() //przekomwertuje argument na obiekt numeryczny;
isNan() //sprawdza czy wartosc podana jako parametr nie jest liczbą;
Math.sqrt(),Math.round(),Math.min(), Math.max(), Math.random()
eval() //zamiana stringu na typ liczbowy

Delta:
// a=1,b=2,c=-3 - deleta dodatnia Δ=16, x₁=1, x₂=-3
// a=1,b=2,c=1 - delta zerowa Δ=0, x₁=-1
// a=4,b=4,c=4 - delta ujemna Δ=-48
```
### JavaScript i HTML
```js
// FORMATOWANIE TEKSTU
strike() //<s>Przekreslony tekst</s>
italics() // <i>Tekst pochylony</i>
fontcolor('lightblue') //kolor
fontSize('12px') //rozmiar czcionki
fontStyle('italic') //styl czcionki
fontWeight('bold') //czcionka pogrubiona
backgroundColor('red') //kolor tla

//FUNKCJE TEKSTOWE
length() //ile znakow ma tekst
toUpperCase() //duze_litery
toLowerCase() //male_litery

//WŁAŚCIWOŚCI HTML
.checked
.value
.innerHTML
.src
.style
```

# ✅ INNE

## (na 99% nie bedzie)

```js
// operacje na DOM
document.createElement(element)
document.removeChild(element)
document.appenddChild(element)
document.replaceChild(element)

//Zmiana elemntow DOM
element.atribute = "nowa wartosc"
element.SetAttribute(atrubut,wlasciowsc)
element.style.properties = "nowa wartosc"


//podwojne klikniecie
oddbclick

// klawiatura
onkeyout
onkeypress
onkeydown

// obiekty
onload
onscroll
onresize
````

### Utworzenie elementu HTML
```js
var e = document.createElement('div');
e.classList.add('item');
document.body.appendChild(e);
```