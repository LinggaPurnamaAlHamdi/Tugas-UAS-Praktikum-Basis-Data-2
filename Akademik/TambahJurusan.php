<html>
<head>
<title> Tambah Jurusan </title>
</head>
<body bgcolor = "#70a1ff">
	<h2 align = "center"> <u> Tambah Data Jurusan </u> </h2>

<form action = "TambahJurusan.php" method = "post" name = "form1">
	<table align = "center" width = "30%" border = "1">
		<tr>
			<td> ID Jurusan </td>
			<td> <input type = "text" name = "id_jurusan"> </td>
		</tr>
		<tr>
			<td> Nama Jurusan </td>
			<td> <input type = "text" name = "nama_jurusan"> </td>
		</tr>
		<tr>
		<td colspan = "2" align = "center"> <input type = "submit" name = "Submit" value = "TAMBAH"> </td>
		</tr>
	</table>
</form>

<?php

	if(isset($_POST['Submit'])) {
		$id_jurusan = $_POST['id_jurusan'];
		$nama_jurusan = $_POST['nama_jurusan'];
		
	include_once("Koneksi.php");
	
	$result = mysqli_query($mysqli, "INSERT INTO jurusan(id_jurusan,nama_jurusan)VALUES('$id_jurusan','$nama_jurusan')");
	
	echo "<script> alert('Berhasil menambahkan data jurusan.')</script>";
	echo "Kembali ke <a href = 'Jurusan.php'> Tabel Jurusan </a>";
	
	}
	?>
</body>
</html>