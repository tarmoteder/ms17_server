<?php

session_start();

$conn = mysqli_connect('localhost','root','');

$check_user=$_SESSION["kasutaja"];

$sql = $sql="SELECT * FROM ms17.users WHERE username='$check_user';

$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_array($result);



echo "Tänan sisestuse eest<br>";
echo "Olete sisselogitud";



?>