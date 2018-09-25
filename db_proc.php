<?php

require ('conf.php');

go_home();

// Ühenduse tegemine protseduuriga

$conn = mysqli_connect($server,$user,$pass);

if (!$conn) {
	die("<p>Ühendusega on halvasti ".mysqli_connect_error."</p>");
}
echo "<p>Ühendus protseduuriga on olemas!";

// Funktsioon kirje lisamiseks

// kirje lisamine baasi
function write_record($conn){
    $sql_write = "INSERT INTO ms17.nimekiri (EesNimi, PereNimi, id_code) VALUES ('Endel','Eesvärav','32132231234')";

    if (mysqli_query($conn,$sql_write)){
        echo "<p>Kirje lisamine õnnestus!</p>";
    } else {
        echo "<p>Viga: ".mysqli_error($conn)."</p>";
    }


    mysqli_close($conn);
}
// kirje lisamine andmebaasi nupule vajutades
function write_button($conn){
    echo "<input type='submit' name='insert_record' value='Sisesta kirje'>";
    if(isset($_POST['insert_record'])){
        write_record($conn);
    }
}
// kõigi kirjete lugemine
function show_all($conn){
    $sql_select_all = "SELECT * FROM ms17.nimekiri";
    $result = mysqli_query($conn, $sql_select_all);
    
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<p>id: ".$row["id"].
                " Eesnimi: ".$row["EesNimi"].
                " Perenimi: ".$row["PereNimi"].
                " Isikukood: ".$row["id_code"].
                " Sisestusaeg: ".$row["time"]."</p>";
        }
    } else { echo "Tabel on tühi";}
    mysqli_close($conn);
}
// kõigi kirjete näitamine nupule vajutades
function show_all_button($conn) {
    echo "<input type='submit' name='show_all' value='Näita kõiki kirjeid'>";
    if(isset($_POST['show_all'])){
        show_all($conn);
    }
}
// konkreetse kirje otsimine
function search_by($conn){
    $sql_select_all = "SELECT * FROM ms17.nimekiri WHERE PereNimi ='".$_GET['id']."'";
    $result = mysqli_query($conn, $sql_select_all);
    
    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<p>id: ".$row["id"].
                " Eesnimi: ".$row["EesNimi"].
                " Perenimi: ".$row["PereNimi"].
                " Isikukood: ".$row["id_code"].
                " Sisestusaeg: ".$row["time"]."</p>";
        }
    } else { echo "Sellist kirjet ei ole";}
    mysqli_close($conn);
}

// kirje otsimise nupp
function search_by_button($conn) {
    echo "<input type='submit' name='search_by' value='Näita ühte kirjet'>";
    if(isset($_GET['search_by'])){
        search_by($conn);
        var_dump($_GET);
    }
}

// kirje kustutamine baasist (GET meetod, ÄRA KASUTA)
function delete_record($conn){
    $sql_delete = "DELETE FROM ms17.nimekiri WHERE EesNimi= '".$_GET['id']."'";

    if (mysqli_query($conn,$sql_delete)){
        echo "<p>Kirje kustutamineõnnestus!</p>";
    } else {
        echo "<p>Viga: ".mysqli_error($conn)."</p>";
    }


    mysqli_close($conn);
}

// kirje kustutamine andmebaasi nupule vajutades (GET)
function delete_button($conn){
    echo "<input type='submit' name='delete_record' value='Kustuta kirje'>";
    if(isset($_GET['delete_record'])){
        delete_record($conn);
    }
}

// kirje kustutamine baasist (POST meetod)
function delete_record_post($conn){
    $sql_delete = "DELETE FROM ms17.nimekiri WHERE id= '".$_POST['id']."'";
    var_dump($sql_delete);

    if (mysqli_query($conn,$sql_delete)){
        echo "<p>Kirje kustutamineõnnestus!</p>";
    } else {
        echo "<p>Viga: ".mysqli_error($conn)."</p>";
    }


    mysqli_close($conn);
}
// kirje kustutamine andmebaasi nupule vajutades (POST)
function delete_button_post($conn){
    echo "<input type='submit' name='delete_record_post' value='Kustuta kirje'>";
    if(isset($_POST['delete_record_post'])){
        delete_record_post($conn);
    }
}

?>

<html>

<!-- Sisestusvorm -->
<form action="" method="post">
    <h3>Kirje sisestamine</h3>
    <ul>
        <li>
        <label for="Eesnimi">Eesnimi</label>
        <input type="text" name="eesnimi">
        <label for="Perenimi">Perenimi</label>
        <input type="text" name="perenimi">
        <label for="isikukood">Isikukood</label>
        <input type="text" name="iskukood">
        </li>
    
    </ul>
    <p><?php write_button($conn);   ?></p>

</form>
<!-- Päringuvorm (näitab kõiki kirjeid) -->
<form action="" method="post">
    <h3> Kõigi kirjete pärimine</h3>
    <p><?php show_all_button($conn);   ?></p>

</form>
<!-- Päringuvorm (üksikud) -->
<form action="" method="get">
    <h3>Andmete pärimine GET meetodiga</h3>
    <ul>
        <li>
        <label for="ID">ID</label>
        <input type="text" name="id">
        </li>
        <li>
        <?php search_by_button($conn); ?>
        </li>
    </ul>
</form>

<h3>GET meetod !!ÄRGE MINGIL JUHUL NII KASUTAGE SISESTUSEKS EGA KUSTUTAMISEKS!! See on näide, kuidas ei tohi teha</h3>
<form action="" method="get">
    
    <ul>
        <li>
        <label for="ID">ID</label>
        <input type="text" name="id">
        </li>
        <li>
        <?php delete_button($conn); ?>
        </li>
    </ul>
</form>

<h3>Nii tohib kustutada (POST meetod)</h3>
<form action="" method="post">
    
    <ul>
        <li>
        <label for="ID">ID</label>
        <input type="text" name="id">
        </li>
        <li>
        <?php delete_button_post($conn); ?>
        </li>
    </ul>
</form>



</html>