<?php
include 'keretaApiInherit.php';

$keretaApi = new keretaApi('KA fast');
$keretaApi->setGerbong(20);

echo 'nama kereta ' . $keretaApi->bacaMerek() .
' dengan jumlah gerbong ' . $keretaApi->getGerbong();
?>
