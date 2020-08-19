<?php
include_once("Koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM matkul ORDER BY kode_mk");
?>

<html>
<head>
	<title> Mata Kuliah </title>
</head>

<body bgcolor = "#70a1ff">
<br> 
<br> 
<br>
<table colspan = "5" align = "center" border = "1">
	<tr>
		<td colspan = "5"> <p align = "center"> <font size = "6"> MATA KULIAH </font> </p> </td>
	</tr>
	<tr>
	<th>Kode Mata Kuliah</th> <th>Nama Mata Kuliah</th> <th>SKS</th> <th>Semester</th> <th>Aksi</th>
	</tr>
	<?php
	while($user_data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$user_data['kode_mk']."</td>";
		echo "<td>".$user_data['nama_mk']."</td>";
		echo "<td>".$user_data['sks']."</td>";
		echo "<td>".$user_data['semester']."</td>";
		echo "<td><a href='EditMataKuliah.php?kode_mk=$user_data[kode_mk]'>Ubah</a> | <a href='DeleteMataKuliah.php?kode_mk=$user_data[kode_mk]'>Hapus</a></td></tr>"; 
	}
	?>
		<tr>
			<td colspan = "5" align= "center"><a href = "TambahMataKuliah.php"> <button> <b> TAMBAH </b> </button> </a> </td> 
		</tr>
</table>
</body>
</html>