<?php

// echo hash('sha384', 'Passw0rd');





include('login.php');

?>

<!DOCTYPE html>

<html>

<body>
    <form method="post">
        <input type="text" name="kasutaja" placeholder="kastuajanimi">
        <input type="password" name="parool" placeholder="parool">
        <button type="submit" name="sisesta">Logi sisse</button>
        <button  type="reset" name="">Puhasta väljad</button>
        <button id="nupp" onclick="color()" >Olen nupp</button>
    </form>
</body>

</html>
<?php 
// var_dump($_POST);
?>

<script>
function color(){
  document.getElementById("nupp").style.color="red";
}
</script>