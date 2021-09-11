<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Rozgrywki futbolowe</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header id="baner">
        <h2>Światowe Rozgrywki Piłkarskie</h2>
        <img src="obraz1.jpg" alt="obraz">
    </header>

    <section id="mecze">
        <?php 
            $db = mysqli_connect('localhost','root','','egzamin');
            $sql = "select zespol1, zespol2, wynik, data_rozgrywki from rozgrywka WHERE zespol1='EVG'";
            $res = mysqli_query($db,$sql);
            while($row = mysqli_fetch_array($res)){
                echo "
                <div class=mecz>
                    <h3>{$row['zespol1']} - {$row['zespol2']}</h3>
                    <h4>{$row['wynik']}</h4>
                    <p>w dniu: {$row['data_rozgrywki']}</p>
                </div>
                ";

            }
            ?>

    </section>

    <div id="glowny">
        <h2>Reprezentacja polski</h2>
    </div>
    <div id="lewy">
        <p>Podaj pozycje zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
        <form action="futbol.php" method="POST">
            <input type="number" name="id">
            <input type="submit" value="Sprawdz">
        </form>
        <ul>
            <!-- skrypt -->
            <?php
                if(isset($_POST['id']))
                {
                    $sql = "
                    select imie, nazwisko 
                    from zawodnik 
                    where 
                    pozycja_id={$_POST['id']}"
                    ;
                    $res = mysqli_query($db,$sql);
                    while($row = mysqli_fetch_array($res)){
                        echo "
                        <li>
                           <p>{$row['imie']} {$row['nazwisko']}</p> 
                        </li>
                        ";
                    }

                } 
            ?>
        </ul>

    </div>

    <div id="prawy">
        <img src="zad1.png" alt="pilkarz"> <br>
        <p>Autor : 00000000000</p>
        <?php mysqli_close($db); ?>
    </div>
</body>
</html>