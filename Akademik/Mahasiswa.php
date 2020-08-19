<?php
include_once("Koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa JOIN jurusan ON mahasiswa.id_jurusan = jurusan.id_jurusan ORDER BY nim");
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
		<td colspan = "7"> <p align = "center"> <font size = "6"> MAHASISWA </font> </p> </td>
	</tr>
	<tr>
	<th>NIM</th> <th>Nama Mahasiswa</th> <th>Tanggal Lahir</th> <th>Jenis Kelamin </th> <th>Alamat</th> <th>Jurusan</th> <th> Aksi </th>
	</tr>
	<?php
	while($user_data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$user_data['nim']."</td>";
		echo "<td>".$user_data['nama_mhs']."</td>";
		echo "<td>".$user_data['tanggal_lhr']."</td>";
		echo "<td>".$user_data['jk']."</td>";
		echo "<td>".$user_data['alamat']."</td>";
		echo "<td>".$user_data['nama_jurusan']."</td>";
		echo "<td><a href='EditMahasiswa.php?nim=$user_data[nim]'>Ubah</a> | <a href='DeleteMahasiswa.php?nim=$user_data[nim]'>Hapus</a></td></tr>"; 
	}
	?>
		<tr>
			<td colspan = "7" align= "center"><a href = "TambahMahasiswa.php"> <button> <b> TAMBAH </b> </button> </a> </td> 
		</tr>
</table>
</body>
</html>