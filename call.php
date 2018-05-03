<?php
// create calling with include
include 'kendaraan.php';

// create object for call the class
$kendaraan1 = new kendaraan();
// and can create object without ()
$kendaraan2 = new kendaraan;

// set value properties use object
$kendaraan1->harga = 100000000;
$kendaraan1->tahunPembuatan = 2005;
$kendaraan1->bahanBakar = 'Premium';
// set value function use object
$kendaraan1->setMerek('Miok');

// run method in class kendaraan use object
echo $kendaraan1->dapatSubsidi();

// for call properties value
// procedure 1
// echo " Merek = $kendaraan1->merek dengan harga = $kendaraan1->harga";
// procedure 2
echo ' Merek ' . $kendaraan1->bacaMerek() . ' dengan harga ' . $kendaraan1->bacaHarga();
?>
