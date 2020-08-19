<?php
include_once("Koneksi.php");

if(isset($_POST['update']))
{   
	
	$nim = $_POST['nim'];
	$nama_mhs = $_POST['nama_mhs'];
	$tanggal_lhr = $_POST['tanggal_lhr'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$id_jurusan = $_POST['id_jurusan'];

    $result = mysqli_query($mysqli, "UPDATE mahasiswa SET nim='$nim',nama_mhs='$nama_mhs',tanggal_lhr='$tanggal_lhr',jk='$jk',alamat='$alamat',id_jurusan='$id_jurusan' WHERE nim=$nim");

    header("Location: Mahasiswa.php");
}
?>
<?php
$nim = $_GET['nim'];

$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE nim=$nim");

while($user_data = mysqli_fetch_array($result))
{
    $nim = $user_data['nim'];
    $nama_mhs = $user_data['nama_mhs'];
    $tanggal_lhr = $user_data['tanggal_lhr'];
	$jk = $user_data['jk'];
	$alamat = $user_data['alamat'];
	$id_jurusan = $user_data['id_jurusan'];
}
?>
<html>
<head>  
    <title>Ubah Data Mahasiswa</title>
</head>

<body bgcolor = "#70a1ff">
	<h2 align = "center"> <u> Ubah Data Mahasiswa </u> </h2>

    <form action = "EditMahasiswa.php" method = "post" name = "update_mahasiswa">
        <table align = "center" width = "30%" border="1">
            <tr> 
                <td>NIM</td>
                <td><input type="text" name="nim" value=<?php echo $nim;?> disabled></td>
            </tr>
            <tr> 
                <td>Nama Mahasiswa</td>
                <td><input type="text" name="nama_mhs" value=<?php echo $nama_mhs;?>></td>
            </tr>
            <tr> 
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lhr" value=<?php echo $tanggal_lhr;?>></td>
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
				<td> <input type = "text" name = "alamat" value=<?php echo $alamat;?>> </td>
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
                <td colspan = "2" align = "center">
				<input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>>
                <input type="submit" name="update" value="UBAH">
				</td>
            </tr>
        </table>
    </form>
</body>
</html>