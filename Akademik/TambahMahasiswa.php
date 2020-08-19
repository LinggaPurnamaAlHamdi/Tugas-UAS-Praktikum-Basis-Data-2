<html>
<head>
<title> Tambah Mahasiswa </title>
</head>
<body bgcolor = "#70a1ff">
	<h2 align = "center"> <u> Tambah Data Mahasiswa </u> </h2>

<form action = "TambahMahasiswa.php" method = "post" name = "form1">
	<table align = "center" width = "30%" border = "1">
		<tr>
			<td> NIM </td>
			<td> <input type = "text" name = "nim"> </td>
		</tr>
		<tr>
			<td> Nama Mahasiswa </td>
			<td> <input type = "text" name = "nama_mhs"> </td>
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
			<td> Jurusan </td>
			<td> 
				<select name = "id_jurusan">
				<option value="1"> Teknik Informatika
				<option value="2"> Teknik Industri
				<option value="3"> Teknik Elektro
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
		$nim = $_POST['nim'];
		$nama_mhs = $_POST['nama_mhs'];
		$tanggal_lhr = $_POST['tanggal_lhr'];
		$jk = $_POST['jk'];
		$alamat = $_POST['alamat'];
		$id_jurusan = $_POST['id_jurusan'];
		
	include_once("Koneksi.php");
	
	$result = mysqli_query($mysqli, "INSERT INTO mahasiswa(nim,nama_mhs,tanggal_lhr,jk,alamat,id_jurusan)VALUES('$nim','$nama_mhs','$tanggal_lhr','$jk','$alamat','$id_jurusan')");
	
	echo "<script> alert('Berhasil menambahkan data mahasiswa.')</script>";
	echo "Kembali ke <a href = 'Mahasiswa.php'> Tabel Mahasiswa </a>";
	
	}
	?>
</body>
</html>