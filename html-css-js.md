# HTML/CSS,  JavaScript


## ✅ HTML
```html
<ol> //ordered list(lista numerowana)
<ul> //unordered list(lista nienumerowana)

    header
    nav
    section article aside
    figure>figcaption
    footer
    main
    details>summary - //hidden p.
```
## ✅ CSS
```css
letter-spacing: 5px; /*odsepy między literami */;

text-transform:
        capitalize; /*pierwsza litera zawsze wielka reszta normlanie*/
        uppercase;
        lowercase;
        none;

box-sizing: content-box | border-box | padding-box
background-color:  red;
color: red;
font-family: Arial;
font-size: 12px;
padding: 10px;
margin: 20px;
float: left/right
clear: both;

```
## ✅ JavaScript

### Zdarzenia/Ewenty
```js
onclick
onmouseover //najechanie myszką na obiekt
onmouseout //odjechanie myszką od obiektu
onkeyout
onload
````

### Utworzenie elementu HTML
```js
var e = document.createElement('div');
e.classList.add('item');
document.body.appendChild(e);
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

Delta:
// a=1,b=2,c=-3 - deleta dodatnia Δ=16, x₁=1, x₂=-3
// a=1,b=2,c=1 - delta zerowa Δ=0, x₁=-1
// a=4,b=4,c=4 - delta ujemna Δ=-48
```
### JavaScript i HTML
```js
// Funkcje tekstowe
strike() //<s>Przekreslony tekst</s>
italics() // <i>Tekst pochylony</i>
fontcolor('lightblue') //kolor
toUpperCase() //duze_litery
toLowerCase() //male_litery

//właściowści HTML
.checked
.value
.innerHTML
.src
```