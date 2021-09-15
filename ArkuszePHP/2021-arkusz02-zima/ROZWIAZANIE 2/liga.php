<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>piłka nożna</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header id="baner">
        <h3>Reprezentacja polski w piłce nożnej</h3>
        <img src="obraz1.jpg" alt="reprezentacja">

    </header>

    <section id="lewy">
        <form action="liga.php" method="POST">
            <select name="lista">
                <option value="1">Bramkarze</option>
                <option value="2">Obrońcy</option>
                <option value="3">Pomocnicy</option>
                <option value="4">Napastnicy</option>
            </select>
            <input type="submit" value="Zobacz">
        </form>

        <img src="zad2.png" alt="piłka">
        <p>Autor: 000000000</p>

    </section>

    <section id="prawy">
        <ol>
            <!-- SKRYPT1 -->
            <?php
                $db = mysqli_connect('localhost','root','','egzamin2');

                if(isset($_POST['lista'])){
                    $sql = "SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id=" . $_POST['lista'];
                    $wynik = mysqli_query($db,$sql);
                    while($wiersz = mysqli_fetch_row($wynik) ){
                        echo "<li><p>" . $wiersz[0] ."</p></li>";
                        echo "<li><p>" . $wiersz[1] ."</p></li>";
                    }
                }   

                
            ?>
        </ol>

    </section>

    <section id="glowny">
        <h3>Liga mistrzów</h3>
    </section>

    <section id="liga">
        <!-- SKRYPT2  -->
        <?php
        $sql2 = "SELECT zespol, punkty, grupa FROM liga ORDER by punkty DESC";
        $wynik2 = mysqli_query($db,$sql2);
        while($wiersz2 = mysqli_fetch_assoc($wynik2)){
            echo '<div class="' . 'druzyna">';
            echo "<h2>" . $wiersz2['zespol'].  "</h2>";
            echo "<h1>" . $wiersz2['punkty'].  "</h1>";
            echo "<p> grupa: " . $wiersz2['grupa'].  "</p>";
            echo "</div>";
        }

        ?>
        </div>
    </section>
    

    <?php mysqli_close($db); ?>
</body>
</html>