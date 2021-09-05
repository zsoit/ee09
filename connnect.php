


<?php
$conn = @new mysqli(
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

$imie = "Adama";
$nazwisko = "Mickiewicz";

$sql = "SELECT Imie, Nazwisko, Ksiazka FROM biblioteka WHERE Imie = ? AND nazwisko =?";

$query = $conn->prepare($sql);
$query->bind_param('ss', $imie, $nazwisko);
$query->execute();

$res =  $query->get_result();

echo " <h1>Liczba zwróconych wierszy: {$res->num_rows}</h1>";

foreach($res as $row){
    echo "
    <div class=row>
    <p>{$row['Imie']}</p>
    <p>{$row['Nazwisko']}</p>
    <p>Ksiazka: <b>{$row['Ksiazka']}</b> </p>
    ";

}


$conn->close();





?>





<?php
$conn = @new mysqli(
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

$imie = "Adama";
$nazwisko = "Mickiewicz";

$sql = "SELECT Imie, Nazwisko, Ksiazka FROM biblioteka WHERE Imie = ? AND nazwisko =?";

$query = $conn->prepare($sql);
$query->bind_param('ss', $imie, $nazwisko);
$query->execute();

$res =  $query->get_result();

echo " <h1>Liczba zwróconych wierszy: {$res->num_rows}</h1>";

foreach($res as $row){
    echo "
    <p>{$row['Imie']}</p>
    <p>{$row['Nazwisko']}</p>
    <p>Ksiazka: <b>{$row['Ksiazka']}</b> </p>
    ";

}

while($row = $res->fetch_assoc()){
    echo "
    <p>{$row['Imie']}</p>
    <p>{$row['Nazwisko']}</p>
    <p>Ksiazka: <b>{$row['Ksiazka']}</b></p>
    ";
}

while($row = $res->fetch_row()){
    echo "
    <p>{$row[0]}</p>
    <p>{$row[1]}</p>
    <p>Ksiazka: <b>{$row[2]}</b></p>
    ";
}



$conn->close();





?>
