<?php
/**
 *
 */
class operasiBilangan
{
  private $bil1;
  private $bil2;

  function __construct($bil1, $bil2)
  {
    $this->bil1 = $bil1;
    $this->bil2 = $bil2;
  }

  function penjumlahan()
  {
    $hasil = $this->bil1 + $this->bil2;
    return $hasil;
  }

  function pengurangan()
  {
    $hasil = $this->bil1 - $this->bil2;
    return $hasil;
  }

  function perkalian()
  {
    $hasil = $this->bil1 * $this->bil2;
    return $hasil;
  }

  function pembagian()
  {
    $hasil = $this->bil1 / $this->bil2;
    return $hasil;
  }

  function modulo()
  {
    $hasil = $this->bil1 % $this->bil2;
    return $hasil;
  }

  function pangkat()
  {
    $hasil = pow($this->bil1, $this->bil2);
    return $hasil;
  }
}
?>
