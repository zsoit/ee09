


<?php
// $conn = new mysqli(
//     "localhost",
//     'root',
//     '',
//     'szkola'
// );

$conn =  mysqli_connect(
    "localhost",
    'root',
    '',
    'szkola'
);


if($conn->connect_errno){
    echo "Nie połączono z bazą danych <br />
    Opis:  {$conn->connect_error} <br />
    Kod: {$conn->connect_errno}
    ";
    exit();
}

$imie = 'Adam';
$nazwisko = 'Mickiewicz';
$sql = "SELECT Imie, Nazwisko, Ksiazka FROM biblioteka WHERE Imie='{$imie}' AND Nazwisko='{$nazwisko}'";
$res = $conn->query($sql);


// foreach($res as $row){
//     echo "<p>{$row['Imie']}</p>";
//     echo "<p>{$row['Nazwisko']}</p>";
//     echo "<p>{$row['Ksiazka']}</p>";

// }


// while($row = $res->fetch_row()){
//     echo "<p>{$row[0]}</p>";
//     echo "<p>{$row[1]}</p>";
//     echo "<p>{$row[2]}</p>";

// }


// while($row = $res->fetch_row()){
//     echo "<p>{$row[0]}</p>";
//     echo "<p>{$row[1]}</p>";
//     echo "<p>{$row[2]}</p>";

// }



// while($row = mysqli_fetch_row($res)){
//     echo "<p>{$row[0]}</p>";
//     echo "<p>{$row[1]}</p>";
//     echo "<p>{$row[2]}</p>";

// }

$conn->close();


?>
