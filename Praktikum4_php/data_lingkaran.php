<?php
require_once "class_lingkaran.php";
echo "NILAI PHI " . Lingkaran::PHI;
$lingkaran1 = new Lingkaran(10);
$lingkaran2 = new Lingkaran(4);

echo "<br/>Luas Lingkaran I ".$lingkaran1->getLuas();
echo "<br/>Luas Lingkaran II ".$lingkaran2->getLuas();

echo "Keliling Lingkaran I ".$lingkaran1->getKeliling();
echo "Keliling Lingkaran II ".$lingkaran2->getKeliling();
?>