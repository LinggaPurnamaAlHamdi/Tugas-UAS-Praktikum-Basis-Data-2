<?php
include_once("Koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM jurusan ORDER BY id_jurusan");
?>

<html>
<head>
	<title> Jurusan </title>
</head>

<body bgcolor = "#70a1ff">
<br> 
<br> 
<br>
<table colspan = "3" align = "center" border = "1">
	<tr>
		<td colspan = "3"> <p align = "center"> <font size = "6"> JURUSAN </font> </p> </td>
	</tr>
	<tr>
	<th>ID Jurusan</th> <th>Nama Jurusan</th> <th>Aksi</th> 
	</tr>
	<?php
	while($user_data = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$user_data['id_jurusan']."</td>";
		echo "<td>".$user_data['nama_jurusan']."</td>";
		echo "<td><a href='EditJurusan.php?id_jurusan=$user_data[id_jurusan]'>Ubah</a> | <a href='DeleteJurusan.php?id_jurusan=$user_data[id_jurusan]'>Hapus</a></td></tr>"; 
	}
	?>
		<tr>
			<td colspan = "7" align= "center"><a href = "TambahJurusan.php"> <button> <b> TAMBAH </b> </button> </a> </td> 
		</tr>
</table>
</body>
</html>