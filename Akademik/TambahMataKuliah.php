<html>
<head>
<title> Tambah Mata Kuliah </title>
</head>
<body bgcolor = "#70a1ff">
	<h2 align = "center"> <u> Tambah Data Mata Kuliah </u> </h2>

<form action = "TambahMataKuliah.php" method = "post" name = "form1">
	<table align = "center" width = "30%" border = "1">
		<tr>
			<td> Kode Mata Kuliah </td>
			<td> <input type = "text" name = "kode_mk"> </td>
		</tr>
		<tr>
			<td> Nama Mata Kuliah </td>
			<td> <input type = "text" name = "nama_mk"> </td>
		</tr>
		<tr>
			<td> SKS </td>
			<td> <input type = "text" name = "sks"> </td>
		</tr>
		<tr>
			<td> Semester </td>
			<td> <input type = "text" name = "semester"> </td>
		</tr>
		<tr>
		<td colspan = "2" align = "center"> <input type = "submit" name = "Submit" value = "TAMBAH"> </td>
		</tr>
	</table>
</form>

<?php

	if(isset($_POST['Submit'])) {
		$kode_mk = $_POST['kode_mk'];
		$nama_mk = $_POST['nama_mk'];
		$sks = $_POST['sks'];
		$semester = $_POST['semester'];
		
	include_once("Koneksi.php");
	
	$result = mysqli_query($mysqli, "INSERT INTO matkul(kode_mk,nama_mk,sks,semester)VALUES('$kode_mk','$nama_mk','$sks','$semester')");
	
	echo "<script> alert('Berhasil menambahkan data mata kuliah.')</script>";
	echo "Kembali ke <a href = 'MataKuliah.php'> Tabel Mata Kuliah </a>";
	
	}
	?>
</body>
</html>