<?php
include 'kendaraan.php';

// inherit can use all properties and method in class parent
// nb : not use if encapsulation private
class keretaApi extends kendaraan
{
  public $jmlGerbong;

  // for replace method __construct in kendaraan.php
  function __construct($merek)
  {
    $this->merek = $merek;
  }

  // create mutator
  function setGerbong($jmlGerbong)
  {
    $this->jmlGerbong = $jmlGerbong;
  }

  // create asesor
  function getGerbong()
  {
    return $this->jmlGerbong;
  }
}
?>
