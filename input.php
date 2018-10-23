<?php

require 'file.php';


// Nupu tegemine faili kirjutamise funktsiooni välja kutsumiseks

function insert_read_txt_button(){
    echo "<input type='submit' name='insert_read_txt' value='Sisesta tekst faili'>";
    if(isset($_POST['txt']) && $_POST['txt']!='' ){
        write_read_file($_POST['txt']);
    } else {echo "Nadikael, sa ei sisestanud mitte midagi";}
}


?>

<form action="" method="post">
    <h3>Teksti sisestamine faili ja sealt uuesti lugemine</h3>
    <ul>
        <li>
        <label for="txt" >Sisestage tekst</label>
        <input type="text" name="txt">
        </li>
        <li>
        <?php insert_read_txt_button() ?>
        </li>
    </ul>
</form>