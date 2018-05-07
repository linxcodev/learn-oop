<?php
include 'crud.php';

$crud = new crud();

// read data
$id = $_GET['id'];

$query = "SELECT * FROM buku WHERE id = '$id'";
$hasil = mysqli_query($crud->connectMysql(), $query);
$data = mysqli_fetch_array($hasil);
?>

<html>
<head>
	<title>Data Buku</title>
</head>

<body>
  <form action="edit-proses.php" method="POST">
  		<table>
        <tr>
  				<td>
  					<input type="hidden" name="id" value="<?=$data['id']?>" required>
  				</td>
  			</tr>
			  <tr>
  				<td>Judul</td>
  				<td>:</td>
  				<td>
  					<input type="text" name="judul" value="<?=$data['judul']?>" required>
  				</td>
  			</tr>
  			<tr>
  				<td>Pengarang</td>
  				<td>:</td>
  				<td>
  					<input type="text" name="pengarang" value="<?=$data['pengarang']?>" required>
  				</td>
  			</tr>
        <tr>
  				<td>Penerbit</td>
  				<td>:</td>
  				<td>
  					<input type="text" name="penerbit" value="<?=$data['penerbit']?>" required>
  				</td>
  			</tr>
        <tr>
  				<td>Tahun Terbit</td>
  				<td>:</td>
  				<td>
  					<input type="text" name="tahunTerbit" value="<?=$data['tahunTerbit']?>" required>
  				</td>
  			</tr>
        <tr>
  				<td></td>
  				<td></td>
  				<td>
  					<input type="submit" value="Update">
  				</td>
  			</tr>
  		</table>
  	</form>
  </body>
  </html>
