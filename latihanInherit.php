<?php
include 'kendaraan.php';
/**
 * trying class pesawat inherit kendaraan
 */
class pesawat extends kendaraan
{
  private $tinggiMax;
  private $kecepatanMax;

  function setTinggiMax($tinggiMax)
  {
    $this->tinggiMax = $tinggiMax;
  }

  function setKecepatanMax($kecepatanMax)
  {
    $this->kecepatanMax = $kecepatanMax;
  }

  function getTinggiMax()
  {
    return $this->tinggiMax;
  }

  function getTahun()
  {
    return $this->tahunPembuatan;
  }

  function biayaOP()
  {
    if ($this->tinggiMax > 5000 && $this->kecepatanMax > 800) {
      $biayaOP = 30/100*$this->bacaHarga();
    } elseif ($this->tinggiMax >= 3000 && $this->tinggiMax <= 5000 && $this->kecepatanMax >= 500 && $this->kecepatanMax <= 800) {
        $biayaOP = 20/100*$this->bacaHarga();
    } elseif ($this->tinggiMax < 3000 && $this->tinggiMax > 0 && $this->kecepatanMax < 500 && $this->kecepatanMax > 0) {
      $biayaOP = 10/100*$this->bacaHarga();
    } else {
      $biayaOP = 5/100*$this->bacaHarga();
    }

    return $biayaOP;
  }
}
?>
