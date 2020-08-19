<html>
<head>
<title> Tambah Dosen </title>
</head>
<body bgcolor = "#70a1ff">
	<h2 align = "center"> <u> Tambah Data Dosen </u> </h2>

<form action = "TambahDosen.php" method = "post" name = "form1">
	<table align = "center" width = "30%" border = "1">
		<tr>
			<td> NIP </td>
			<td> <input type = "text" name = "nip"> </td>
		</tr>
		<tr>
			<td> Nama Dosen </td>
			<td> <input type = "text" name = "nama_dosen"> </td>
		</tr>
		<tr>
			<td> Tanggal Lahir </td>
			<td> <input type = "date" name = "tanggal_lhr"> </td>
		</tr>
		<tr>
			<td> Jenis Kelamin </td>
			<td> 
				<input type = "radio" name = "jk" value = "1"> Laki-laki
				<input type = "radio" name = "jk" value = "2"> Perempuan
			</td>
		</tr>
		<tr>
			<td> Alamat </td>
			<td> <input type = "text" name = "alamat"> </td>
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
		<td colspan = "2" align = "center"> <input type = "submit" name = "Submit" value = "TAMBAH"> </td>
		</tr>
	</table>
</form>

<?php

	if(isset($_POST['Submit'])) {
		$nip = $_POST['nip'];
		$nama_dosen = $_POST['nama_dosen'];
		$tanggal_lhr = $_POST['tanggal_lhr'];
		$jk = $_POST['jk'];
		$alamat = $_POST['alamat'];
		$kode_mk = $_POST['kode_mk'];
		
	include_once("Koneksi.php");
	
	$result = mysqli_query($mysqli, "INSERT INTO dosen(nip,nama_dosen,tanggal_lhr,jk,alamat,kode_mk)VALUES('$nip','$nama_dosen','$tanggal_lhr','$jk','$alamat','$kode_mk')");
	
	echo "<script> alert('Berhasil menambahkan data dosen.')</script>";
	echo "Kembali ke <a href = 'Dosen.php'> Tabel Dosen </a>";
	
	}
	?>
</body>
</html>