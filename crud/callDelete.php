<?php
include 'crud.php';

$crud = new crud();

// check get del
if (isset($_GET['del']))
{
    // read data
    $id = $_GET['id'];
    $judul = $_GET['judul'];

    // process delete data via method by id
    $crud->delete($id);
}

// show data delete with alert and go to file callShow
echo
'<script>
alert("Data buku '.$judul.' sudah dihapus");
document.location="callRead.php";
</script>';
?>
