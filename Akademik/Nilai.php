<?php
include_once("Koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM nilai JOIN mahasiswa ON nilai.nim = mahasiswa.nim JOIN matkul ON nilai.kode_mk = matkul.kode_mk ORDER BY id_nilai ");
?>

<html>
<head>
	<title> Nilai </title>
</head>

<body bgcolor = "#70a1ff">
<br> 
<br> 
<br>
<table colspan = "5" align = "center" border = "1">
	<tr>
		<td colspan = "5"> <p align = "center"> <font size = "6"> NILAI </font> </p> </td>
	</tr>
	<tr>
	<th>ID Nilai</th> <th>NIM</th> <th>Mata Kuliah</th> <th>Nilai</th> <th>Aksi</th>
	</tr>
	<?php
	while($user_data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$user_data['id_nilai']."</td>";
		echo "<td>".$user_data['nim']."</td>";
		echo "<td>".$user_data['nama_mk']."</td>";
		echo "<td>".$user_data['nilai']."</td>";
		echo "<td><a href='EditNilai.php?id_nilai=$user_data[id_nilai]'>Ubah</a> | <a href='DeleteNilai.php?id_nilai=$user_data[id_nilai]'>Hapus</a></td></tr>"; 
	}
	?>
		<tr>
			<td colspan = "5" align= "center"><a href = "TambahNilai.php"> <button> <b> TAMBAH </b> </button> </a> </td> 
		</tr>
</table>
</body>
</html>