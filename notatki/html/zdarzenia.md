# Zdarzenia JavaScript
Przykład 1
```html
<!-- wersja 1 -->
<script>
    function kolor() {
        document.fgColor = 'red';
    }
</script>

<p onclick="kolor()">Jakub</p>
```
```html
<!-- wersja2 -->

<script>
    var napis = document.getElementById('napis');
    napis.addEventListener('click', function(){
        napis.style.color = 'red';
    })
</script>

<p id="napis">Jakub</p>

```

Przykład 2
```html
<script>
    function oblicz() {
        var a = 2;
        var b = 3;
        var iloczyn = a * b;
        alert(`Iloczyn równa się ${iloczyn}`)
    }
</script>

<button onclick="oblicz()">Oblicz</button>

```

Przykład 3
```html
<script>
    function komunikat() {
        alert('Najechałeś na mnie myszą!')
    }
</script>
<p onmouseover="komunikat()">Przykladowy tekst</p>

```

## Zadanie! Zmien obrazek po najechaniu na niego
```html
<!-- wersja 1 -->
<img src="obrazek1.jpg" id="obraz" onmouseover="zmien()" onmouseout="wroc()">

<script>
    var obraz = document.getElementById('obraz');

    function zmien()
    {
        obraz.src = "obrazek2.jpg";
    }

    function wroc()
    {
        obraz.src = "obrazek1.jpg";
    }
</script>

```
```html
<!-- wersja 2 -->
<img src="obrazek1.jpg" id="obraz">

<script>
    var obraz = document.getElementById('obraz');

    obraz.addEventListner('mouseover', function(){
            obraz.src = "obrazek2.jpg";
        }
    );

    obraz.addEventListner('mouseout', function(){
            obraz.src = "obrazek1.jpg";
        }
    );
</script>

```