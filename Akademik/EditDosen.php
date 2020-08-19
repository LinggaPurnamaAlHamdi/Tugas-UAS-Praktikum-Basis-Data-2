<?php
include_once("Koneksi.php");

if(isset($_POST['update']))
{   
	
	$nip = $_POST['nip'];
	$nama_dosen = $_POST['nama_dosen'];
	$tanggal_lhr = $_POST['tanggal_lhr'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$kode_mk = $_POST['kode_mk'];

    $result = mysqli_query($mysqli, "UPDATE dosen SET nip='$nip',nama_dosen='$nama_dosen',tanggal_lhr='$tanggal_lhr',jk='$jk',alamat='$alamat',kode_mk='$kode_mk' WHERE nip=$nip");

    header("Location: Dosen.php");
}
?>
<?php
$nip = $_GET['nip'];

$result = mysqli_query($mysqli, "SELECT * FROM dosen WHERE nip=$nip");

while($user_data = mysqli_fetch_array($result))
{
    $nip = $user_data['nip'];
    $nama_dosen = $user_data['nama_dosen'];
    $tanggal_lhr = $user_data['tanggal_lhr'];
	$jk = $user_data['jk'];
	$alamat = $user_data['alamat'];
	$kode_mk = $user_data['kode_mk'];
}
?>
<html>
<head>  
    <title>Ubah Data Dosen</title>
</head>

<body bgcolor = "#70a1ff">
	<h2 align = "center"> <u> Ubah Data Dosen </u> </h2>

    <form action = "EditDosen.php" method = "post" name = "update_dosen">
        <table align = "center" width = "30%" border="1">
            <tr> 
                <td>NIP</td>
                <td><input type="text" name="nip" value=<?php echo $nip;?> disabled></td>
            </tr>
            <tr> 
                <td>Nama Dosen</td>
                <td><input type="text" name="nama_dosen" value=<?php echo $nama_dosen;?>></td>
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
				</td>
			</tr>
            <tr>
                <td colspan = "2" align = "center">
				<input type="hidden" name="nip" value=<?php echo $_GET['nip'];?>>
                <input type="submit" name="update" value="UBAH">
				</td>
            </tr>
        </table>
    </form>
</body>
</html>