<?php


$server = "localhost";
$user = "root";
$pass = "";

function go_home() {
    
    echo "<p><a href='index.php'>Tagasi kodulehele</a></p>";
    
}

function db_connect($srv, $usr, $psw){
    
    // Ühenduse tegemine protseduuriga

    $conn = mysqli_connect($srv,$usr,$psw);

    if (!$conn) {
        die("<p>Ühendusega on halvasti ".mysqli_connect_error."</p>");
    }
    echo "<p>Ühendus protseduuriga on olemas!";
}

?>

<link rel="stylesheet" href="css/style.css" >