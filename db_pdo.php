<?php

require ('conf.php');

go_home();

// PDO 

try {
	$conn = new PDO("mysql:host=$server;dbname=ms17",$user,$pass);
	$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo "<p>PDO ühendus on olemas</p>";
}
catch(PDOException $viga){
	echo "PDOga halvasti:".$viga -> getMessage();
}

$conn = null;


?>