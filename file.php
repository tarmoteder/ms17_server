<?php

// Faili kirjutamine ja lugemine

function write_read_file() {

$file= fopen('tekst.txt',"a") or die("Ei saanud faili avada");

$txt = "Mina olen tekst \n";

fwrite($file, $txt);
fclose($file);

echo nl2br(file_get_contents('tekst.txt'));
    
}

// Lihtne failipõhine loendaja (iga külastus lisab +1)
function counter(){
    $counter_file = 'count.txt';

    if (!file_exists($counter_file)) {
        $file_c = fopen($counter_file,"w") or die("Ei saanud avada");
        $count = 1;
        fwrite($file_c,$count);
        fclose($file_c);
    } else {
        $file_c = fopen($counter_file,"r+") or die("Ei saanud avada");
        $count = file_get_contents($counter_file)+1;
        fwrite($file_c,$count);
        fclose($file_c);
    }

    echo "Olete külastaja nr: ".$count;
    }

counter();

?>