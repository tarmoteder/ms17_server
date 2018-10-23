<?php

require 'file.php';


echo '<h1>Hello</h1>';

$serv = array ('host' => "localhost",'pass' => "", 'user' => "root");

// $n_arr = array ('auto'=> array (bmw => array (300,500), audi=> array (A3,A4,A5)))

?>

<h2>Andmevbaasid</h2>
<p><a href="db_proc.php">Proc. DB</a></p>
<p><a href="db_obj.php">Obj. DB</a></p>
<p><a href="db_pdo.php">PDO DB</a></p>

<h2>Failioperatsioonid</h2>
<p><a href="input.php">Faili kirjutamine ja lugemine</a></p>

<form action="" method="post">
    <h3>Teksti sisestamine faili ja sealt uuesti lugemine</h3>
    <ul>
        <li>
        <label for="txt" >Sisestage tekst</label>
        <input type="password" name="txt" maxlength="5" required>
        </li>
        <li>
        <?php  ?>
        </li>
    </ul>
</form>


<?php counter(); ?>