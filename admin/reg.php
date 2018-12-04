<?php

$conn = mysqli_connect('localhost','root','');

if (isset($_POST['register'])){
    $user = $_POST['kasutaja'];
    $pass = $_POST['parool'];
    $check = $_POST['parool2'];
    
    if ($pass==$check){

        $sql="SELECT * FROM ms17.users WHERE username='$user'";

        $user_check = mysqli_query($conn, $sql);
        echo var_dump($user_check)."<br>";
        $row = mysqli_fetch_array($user_check);
        echo var_dump($row)."<br>";
    
        if (!$row) {
            $pass = hash('md5',$pass);
            $sql="INSERT INTO ms17.users (username,passw0rd) VALUES ('$_POST[kasutaja]','$pass')";
            mysqli_query($conn, $sql); }
         
        else {echo "Selline kasutaja on juba olemas!";}
    }  
    else { echo "Paroolid ei klapi"; }
}
?>

<html>
<body>
    <h1>Registreerimisvorm</h1>
    <form method="post">
        <input type="text" name="kasutaja" placeholder="kastuajanimi">
        <input type="text" name="parool" placeholder="parool">
        <input type="text" name="parool2" placeholder="parooli kordus">
        <button type="submit" name="register">Registreeru</button>
        <button  type="reset" name="">Puhasta väljad</button>
    </form>
</body>
</html>