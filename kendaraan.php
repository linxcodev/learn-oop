<?php
// create class
class kendaraan {
  // properties on the class is a definition of the class
  var $warna;             // variable in class called properties
  var $harga;             // var is same with public
  var $merek;
  var $jumlah_roda;       // propertie with method write snake_case
  var $bahanBakar;        // propertie with method write camelCase
  var $tahunPembuatan;

  // function in class for working this class and as working the properties
  // function in class, call method
  function statusHarga()
  {
    // $this->harga for access properties $harga on a class
      if ($this->harga > 50000000) {
        $status = 'mahal'; // $status is not properties, because this variable no description on class
      } else {
        $status = 'murah';
      }

      return $status;
  }

  function dapatSubsidi()
  {
    if ($this->tahunPembuatan <= 2005 && $this->bahanBakar == 'Premium') {
      $subsidi = 'Ya';
    } else {
      $subsidi = 'Tidak';
    }

    return $subsidi;
  }

  function hargaSecond()
  {
    // initial
    $thnPmb = $this->tahunPembuatan;
    $harga = $this->harga;

    if ($thnPmb > 2005) {
      $hargaSecond = 20/100*$harga;
    }

    if ($thnPmb >= 2000 && $thnPmb <= 2005) {
      $hargaSecond = 30/100*$harga;
    }

    if ($thnPmb < 2000) {
      $hargaSecond = 40/100*$harga;
    }

    return $hargaSecond;
  }

  // use parameter
  function setMerek($merek)
  {
    // initial
    $this->merek = $merek;
  }

  function bacaMerek()
  {
    return $this->merek;
  }

  function bacaHarga()
  {
    return $this->harga;
  }
}
?>
