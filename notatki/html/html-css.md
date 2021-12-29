# HTML/CSS

## ✅ POJĘCIA
```css
padding: 10px;
/*marginesy wewnętrzne 10px */

margin: 10px;
/* marginesy zewnętrzne 10 px */

text-align: center
/* wyrównanie tekstu */

letter-spacing: 5px;
/* odległość między literami*/

text-transform:capitalize;
/* tekst napisany kapitalikami (capitalize) */

border-radius: 10px;
/* zaokrąglenie rogów obramowania 10 px */

list-style-type: square;
/* lista punktowana kwadratem */

font-style: normal, italic, oblique;
/* styl prosty, kursywa, pochylony */

border-collapse: collapse, inherit, separace;
/* tworzenie połączonych obramowań
inherit : Ustawia wprost wartość tej własności na wartość rodzica.
separate : Używa modelu wyświetlania "rozdzielonych obramowań".
collapse : Używa modelu wyświetlania "połączonych obramowań".
*/

/* obramowanie tabeli i komórki jest połączone */
border-collapse: 
    collapse;
    separate;
    initial;
    inherit;

/* paski przesuwania (scroll) */
overflow: scroll;
        
```

## ✅ HTML
```html
<ol> //ordered list(lista numerowana)
<ul> //unordered list(lista nienumerowana)
<i> lub <em> //czcionka pochylona
<b> lub <strong> //czcionka pogrubiona
<sup> //indeks górny
<sub> //indeks dolny
    
    
<header>
<nav>
    <main>
    <section>
    <article>
    <aside>
<footer>

<details>
    <summary>

<figure>
    <figcaption
```
## ✅ CSS
```css
letter-spacing: 5px; /*odsepy między literami */;

text-transform:
        capitalize; /*pierwsza litera zawsze wielka reszta normlanie*/
        uppercase;
        lowercase;
        none;

/* obramowanie tabeli i komórki jest połączone */
border-collapse: 
    collapse;
    separate;
    initial;
    inherit;

/* paski przesuwania (scroll) */
overflow: scroll;
        
width: 200px;
height: 1000px;

background-color:  red;
color: red;
font-family: Arial;
font-size: 12px;

border-radius: 20px;
border: 2px solid black;
            -dotted /*kropkowana*/
            -double


padding: 10px;
margin: 20px;
border: 3px solid black;

    -top
    -bottom
    -left
    -margin

float: left/right
clear: both;

/* #flex */
display: flex;
flex-wrap: wrap;
justify-content: center;
flex: 30%;

/* /box-sizing: content-box | border-box | padding-box */
```

# PRZYKŁADY
```html
<link rel="stylesheet" href="style.css"> //podpiecie css

<footer class="stopka" id="stopka">
    <p>STOPKA</p>
</footer>
```
```css
#stopka {
    color: red;
}

.stopka {
    color" red;
}

footer{
    color; red;
}

```
