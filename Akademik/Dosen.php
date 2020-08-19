<?php
include_once("Koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM dosen JOIN matkul ON dosen.kode_mk = matkul.kode_mk ORDER BY nip ");
?>

<html>
<head>
	<title> Mahasiswa </title>
</head>

<body bgcolor = "#70a1ff">
<br> 
<br> 
<br>
<table colspan = "7" align = "center" border = "1">
	<tr>
		<td colspan = "7"> <p align = "center"> <font size = "6"> DOSEN </font> </p> </td>
	</tr>
	<tr>
		<th>NIP</th> <th>Nama Dosen</th> <th>Tanggal Lahir</th> <th>Jenis Kelamin</th> <th>Alamat</th> <th>Mata Kuliah</th> <th>Aksi</th>
	</tr>
	<?php
	while($user_data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$user_data['nip']."</td>";
		echo "<td>".$user_data['nama_dosen']."</td>";
		echo "<td>".$user_data['tanggal_lhr']."</td>";
		echo "<td>".$user_data['jk']."</td>";
		echo "<td>".$user_data['alamat']."</td>";
		echo "<td>".$user_data['nama_mk']."</td>";
		echo "<td><a href='EditDosen.php?nip=$user_data[nip]'>Ubah</a> | <a href='DeleteDosen.php?nip=$user_data[nip]'>Hapus</a></td></tr>"; 
	}
	?>
		<tr>
			<td colspan = "7" align= "center"><a href = "TambahDosen.php"> <button> <b> TAMBAH </b> </button> </a> </td> 
		</tr>
</table>
</body>
</html>