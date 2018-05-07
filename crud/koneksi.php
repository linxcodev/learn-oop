<?php
/**
 * create connection to database
 */
class koneksi
{
  private $host = 'localhost';
  private $user = 'root';
  private $pass = 'toor';
  private $dbName = 'coba';

  function connectMysql()
  {
    //  Open a connection to a MySQL Server
    return mysqli_connect($this->host, $this->user, $this->pass, $this->dbName);
  }
}

?>
