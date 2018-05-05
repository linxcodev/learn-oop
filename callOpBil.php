<?php
include 'operasiBilangan.php';

$operasiBilangan = new operasiBilangan(4,2);
echo 'hasil penjumlahan ' . $operasiBilangan->penjumlahan() .
' hasil pengurangan ' . $operasiBilangan->pengurangan() .
' hasil perkalian ' . $operasiBilangan->perkalian() .
' hasil pembagian ' . $operasiBilangan->pembagian() .
' hasil perpangkatan ' . $operasiBilangan->pangkat() .
' hasil modulus ' . $operasiBilangan->modulo();
?>
