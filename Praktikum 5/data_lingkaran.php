<?php
require_once('class_lingkaran.php');
echo "Nilai PHI: " . Lingkaran::PHI;

//instansiasi object lingkaran
$lingkar1 = new Lingkaran( 14 );
$lingkar2 = new Lingkaran( 3 );

echo "<br/>Luas Lingkaran I :".$lingkar1->getLuas();
echo "<br>Luas Lingkaran II :".$lingkar2->getLuas();

echo "<br> Keliling Lingkaran I : ".$lingkar1->getKeliling();
echo "<br>Keliling Lingkaran II :".$lingkar2->getKeliling();

?>