<?php
include 'koneksi.php';

class crud extends koneksi
{
  function create($judul, $pengarang, $penerbit, $thnTerbit)
  {
    $query = "INSERT INTO buku (judul, pengarang, penerbit, tahunTerbit)
    VALUES ('$judul', '$pengarang', '$penerbit', '$thnTerbit')";
    $hasil = mysqli_query($this->connectMysql(), $query);
    if ($hasil) echo "Data buku sudah disimpan ke DB";
    else echo "Data buku gagal disimpan ke DB";
  }

  function read()
  {
    echo "<table border='1'>";
    echo "<tr><th>No</th><th>Judul
    Buku</th><th>Pengarang</th><th>Penerbit</th><th>Tahun
    Terbit</th><th>Action</th></tr>";

    // query for show all data book
    $query = "SELECT * FROM buku ORDER BY id";
    $hasil = mysqli_query($this->connectMysql(), $query);
    $i = 1;

    //  Fetch a result row as an associative, a numeric array, or both
    while ($data = mysqli_fetch_array($hasil))
    {
      // $_SERVER =Server and execution environment information
      echo '<tr>';
      echo '<td>'.$i.'</td>';
      echo '<td>'.$data['judul'].'</td>';
      echo '<td>'.$data['pengarang'].'</td>';
      echo '<td>'.$data['penerbit'].'</td>';
      echo '<td>'.$data['tahunTerbit'].'</td>';
      echo '<td><a href="callDelete.php?del&id='.$data['id'].'&judul='.$data['judul'].'" onclick="return confirm(\'Yakin Mau Dihapus?\')">Hapus</a> /
      <a href="edit.php?id='.$data['id'].'">Edit</a>';
      echo '</tr>';
      $i++;
    }
    echo "</table>";
  }

  function update($id, $judul, $pengarang, $penerbit, $tahunTerbit)
  {
    $query = "UPDATE buku SET judul = '$judul', pengarang = '$pengarang',
    penerbit = '$penerbit', tahunTerbit = '$tahunTerbit' WHERE id = '$id'";

    mysqli_query($this->connectMysql(), $query);
  }

  function delete($id)
  {
    $query = "DELETE FROM buku WHERE id = '$id'";
    mysqli_query($this->connectMysql(), $query);
  }

}
?>
