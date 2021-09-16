<!DOCTYPE html>
<html>
<head>
    <meta charset="UFT-8">
    <title>Twoje BMI</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <section id="logo">
            <img src="wzor.png" alt="wzór BMI">
        </section>
        <section id="baner">
            <h1>Oblicz swoje BMI</h1>
        </section>
    </header>

    <section id="glowny">
        <table>
            <thead>
                <th>Interpretacja BMI</th>
                <th>Wartość minimalna</th>
                <th>Wartość maksymalna</th>
            </thead>
            <tbody>
                <!-- SKRYPT1 -->
                <?php
                $polaczenie = mysqli_connect('localhost','root','','egzamin3');
                $sql = "SELECT informacja, wart_min, wart_max FROM bmi;";
                $wynik = mysqli_query($polaczenie,$sql);
                while($wiersz = mysqli_fetch_assoc($wynik)){
                    echo "<tr>";
                    echo "<td>" . $wiersz['informacja'] .  "</td>";
                    echo "<td>" . $wiersz['wart_min'] .  "</td>";
                    echo "<td>" . $wiersz['wart_max'] .  "</td>";
                    echo "</tr>";
                }

                ?>
            </tbody>
        </table>
    </section>

    <section id="lewy">
        <h2>Podaj wagę i wzrost</h2>
        <form action="bmi.php" method="POST">
            <label for="waga">Waga: </label>
            <input type="number" name="waga" min="1"> <br>
            <label for="wzrost">Wzrost w cm: </label>
            <input type="number" name="wzrost" min="1"> <br>
            <input type="submit" value="Oblicz i zapamiętaj wynik">
        </form>
        <!-- SKRYPT 2 -->
        <?php
        if( isset($_POST['waga']) && isset($_POST['wzrost']) ){
            $waga = $_POST['waga'];
            $wzrost = $_POST['wzrost'];
            $bmi = $waga/($wzrost*$wzrost);
            $bmi = $bmi*10000;
            echo "Twoja waga: " . $waga . ", Twój wzrost: " . $wzrost . "<br> BMI wynosi: " . $bmi;

            if($bmi>=0 && $bmi<=18)  $bmi_id=1;
            if($bmi>=19 && $bmi<=25)  $bmi_id=2;
            if($bmi>=26 && $bmi<=30)  $bmi_id=3;
            if($bmi>=31 && $bmi<=100)  $bmi_id=4;

            $data_pomiaru = date('Y-m-d');
            $wynik = $bmi;

            $sql2 = "INSERT INTO wynik VALUES('','$bmi_id','$data_pomiaru','$bmi')";

            mysqli_query($polaczenie, $sql2);
        }

        ?>


    </section>

    <section id="prawy">
        <img src="rys1.png" alt="ćwiczenia">
    </section>

    <footer id="stopka">
        Autor: 000000000
        <a href="kwerendy.txt">Zobacz kwerendy</a>
    </footer>

    <?php 
      mysqli_close($polaczenie);
    ?>
    
</body>
</html>