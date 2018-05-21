<?php
/**
 * abstract always for parents class
 * cannot create object must extend if want use
 */
abstract class AbstractKomputer
{
  function komputer()
  {
    return "ini computer saya";
  }

  // abstract function must implement on class kids
  // no have body
  abstract function os();
}

?>
