<?php
include 'AbstractKomputer.php';

class ExtendKomputer extends AbstractKomputer
{
  // implement method os abstract  (Must)
  public function os()
  {
    return "call method abstract";
  }

  public function callKomputer()
  {
    return $this->komputer();
  }
}

$show = new ExtendKomputer;
?>
