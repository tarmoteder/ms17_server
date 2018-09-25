<?php

require ('conf.php');

go_home();

// Objektorienteeritud ühendus

$conn = new mysqli($server,$user,$pass);

if ($conn -> connect_error) {
	die("Ühendusega on halvasti ".$conn -> connect_error);
} echo "<p>Ühendus objektiga on olemas!</p>";

$conn -> close();


?>