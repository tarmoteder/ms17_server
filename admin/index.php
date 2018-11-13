<?php

include('login.php');

?>



<!DOCTYPE html>

<body>
    <form method="post">
        <input type="text" name="kasutaja">
        <input type="password" name="parool">
        <button type="submit" name="sisesta">Logi sisse</button>
        <button  type="reset" name="">Puhasta väljad</button>
        <button id="nupp" onclick="color()" >Olen nupp</button>
    </form>
</body>

</html>
<?php 
var_dump($_POST);
?>

<script>
function color(){
  document.getElementById("nupp").style.color="red";
}
</script>