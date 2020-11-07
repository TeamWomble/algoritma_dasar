<?php

echo "Masukan Jam kerja Anda : ";
    $o=trim(fgets(STDIN));


    if ($o>48) {
        $i = $o - 48; 
        $p = $i * 80000;
        $z = 240000;
        $x = $p + $z;

        echo "Jumlah Gaji Pokok Anda Adalah : Rp.$z \n";
        echo "Upah Lembur Anda Selama $i Hari Adalah: Rp.$p \n";
        echo "Jumlah Gaji Pokok Anda Adalah : Rp.$x";
    }

    else {
        echo "Jumlah Gaji Pokok Anda Adalah : ".$o * 50000;
    }

?>