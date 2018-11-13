<?php

// include('../conf.php');

 $conn = mysqli_connect('localhost','root','');

// $db = db_connect($server, $user, $pass);

if (isset($_POST['sisesta'])){
    $user = $_POST['kasutaja'];
    $pass = $_POST['parool'];
    
    $sql="SELECT * FROM ms17.users WHERE username='$user' AND passw0rd ='$pass'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    
    if($row){
        echo "Teie sisselogimine õnnestus!";
    } else { echo "Sisselogimine ei õnnestunud, kontrollige kasutajanime ja/või salasõna";}
}

?>