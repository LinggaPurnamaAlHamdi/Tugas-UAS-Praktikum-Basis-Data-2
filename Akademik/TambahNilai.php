<html>
<head>
<title> Tambah Nilai </title>
</head>
<body bgcolor = "#70a1ff">
	<h2 align = "center"> <u> Tambah Nilai </u> </h2>

<form action = "TambahNilai.php" method = "post" name = "form1">
	<table align = "center" width = "30%" border = "1">
		<tr>
			<td> ID Nilai </td>
			<td> <input type = "text" name = "id_nilai"> </td>
		</tr>
		<tr>
			<td> NIM </td>
			<td> <input type = "text" name = "nim"> </td>
		</tr>
		<tr>
			<td> Mata Kuliah </td>
			<td> 
				<select name = "kode_mk">
				<option value="1001"> Basis Data 2
				<option value="1002"> Metode Numerik
				<option value="1003"> Sistem Operasi
				<option value="1004"> Pemrograman Visual
				<option value="1005"> Aplikasi Teknologi Online
				<option value="1006"> Rekayasa Perangkat Lunak I
				<option value="1007"> Sistem Informasi
				</select> 
			</td>
		</tr>
		<tr>
			<td> Nilai </td>
			<td> <input type = "text" name = "nilai"> </td>
		</tr>
		<tr>
		<td colspan = "2" align = "center"> <input type = "submit" name = "Submit" value = "TAMBAH"> </td>
		</tr>
	</table>
</form>

<?php

	if(isset($_POST['Submit'])) {
		$id_nilai = $_POST['id_nilai'];
		$nim = $_POST['nim'];
		$kode_mk = $_POST['kode_mk'];
		$nilai = $_POST['nilai'];
		
	include_once("Koneksi.php");
	
	$result = mysqli_query($mysqli, "INSERT INTO nilai(id_nilai,nim,kode_mk,nilai)VALUES('$id_nilai','$nim','$kode_mk','$nilai')");
	
	if($result) {
	echo "<script> alert('Berhasil menambahkan data nilai.')</script>";
	echo "Kembali ke <a href = 'Nilai.php'> Tabel Nilai </a>";
	} else
	echo "<script> alert('Gagal menambahkan data nilai, karena NIM tidak tersedia.')</script>";
	}
	?>
</body>
</html>