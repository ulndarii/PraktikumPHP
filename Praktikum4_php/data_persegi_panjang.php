<?php
require_once "class_persegi_panjang.php";
    $persegi_1 = new persegi_panjang ( 23, 7);
    $persegi_2 = new persegi_panjang (23, 13);

    echo "<br>Luas Persegi Panjang I ".$persegi_1->hitung_luas();
    echo "<br>Luas Persegi Panjang II ".$persegi_2->hitung_luas();

    echo "<br>Keliling Persegi Panjang I ".$persegi_1->hitung_keliling();
    echo "<br>Keliling Persegi Panjang II ".$persegi_2->hitung_keliling();
?>