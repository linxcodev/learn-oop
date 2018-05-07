<?php
include 'crud.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahunTerbit = $_POST['tahunTerbit'];

$crud = new crud();
$crud->update($id, $judul, $pengarang, $penerbit, $tahunTerbit);

echo
'<script>
alert("Done");
document.location="callRead.php";
</script>';
?>
