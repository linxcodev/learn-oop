<?php
include 'latihanInherit.php';

$pesawat = new pesawat('Garuda emak', 2000000, 2018);
$pesawat->setTinggiMax(6000);
$pesawat->setKecepatanMax(900);

echo 'Pesawat ' . $pesawat->merek . ' dengan harga tiket ' .
$pesawat->bacaHarga() . ' dengan biaya operasional ' .
$pesawat->biayaOP() . ' tahun ' . $pesawat->getTahun();
?>
