<?php
// create calling with include
include 'kendaraan.php';

// create object for call the class
// $kendaraan1 = new kendaraan();
// and can create object without ()
// $kendaraan2 = new kendaraan;

// set value properties use object
// $kendaraan1->harga = 100000000;
// $kendaraan1->tahunPembuatan = 2005;
// $kendaraan1->bahanBakar = 'Premium';
// set value function use object
// $kendaraan1->setMerek('Miok');

// run method in class kendaraan use object
// echo $kendaraan1->dapatSubsidi();

// for call properties value
// procedure 1
// echo " Merek = $kendaraan1->merek dengan harga = $kendaraan1->harga";
// procedure 2
// echo ' Merek ' . $kendaraan1->bacaMerek() . ' dengan harga ' . $kendaraan1->bacaHarga();

// calling properties with parameter in __construct
$kendaraan1 = new kendaraan('suprak', 15000000, 2005);

// if you use encapsulation private or protected in properties, cannot call use properties
// can call, if u use method(nb: method not use encapsulation)
echo 'Merek ' . $kendaraan1->bacaMerek() . ' dengan harga ' .
$kendaraan1->bacaHarga() . ' dengan harga second ' . $kendaraan1->hargaSecond();
?>
