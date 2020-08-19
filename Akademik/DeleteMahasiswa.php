<?php
include_once("Koneksi.php");

$nim = $_GET['nim'];

$result = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE nim=$nim");

header("Location:Mahasiswa.php");
?>