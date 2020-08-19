<?php
include_once("Koneksi.php");

if(isset($_POST['update']))
{   
	
	$id_nilai = $_POST['id_nilai'];
	$nim = $_POST['nim'];
	$kode_mk = $_POST['kode_mk'];
	$nilai = $_POST['nilai'];

    $result = mysqli_query($mysqli, "UPDATE nilai SET kode_mk='$kode_mk',nilai='$nilai' WHERE id_nilai=$id_nilai");

    header("Location: Nilai.php");
}
?>
<?php
$id_nilai = $_GET['id_nilai'];

$result = mysqli_query($mysqli, "SELECT * FROM nilai WHERE id_nilai=$id_nilai");

while($user_data = mysqli_fetch_array($result))
{
    $id_nilai = $user_data['id_nilai'];
    $nim = $user_data['nim'];
    $kode_mk = $user_data['kode_mk'];
	$nilai = $user_data['nilai'];

}
?>
<html>
<head>  
    <title>Ubah Data Nilai</title>
</head>

<body bgcolor = "#70a1ff">
	<h2 align = "center"> <u> Ubah Data Nilai </u> </h2>

    <form action = "EditNilai.php" method = "post" name = "update_nilai">
        <table align = "center" width = "30%" border="1">
            <tr> 
                <td> ID Nilai </td>
                <td><input type="text" name="id_nilai" value=<?php echo $id_nilai;?> disabled></td>
            </tr>
            <tr> 
                <td> NIM </td>
                <td><input type="text" name="nim" value=<?php echo $nim;?> disabled></td>
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
				<td><input type="text" name="nilai" value=<?php echo $nilai;?>></td>
			</tr>
            <tr>
                <td colspan = "2" align = "center">
				<input type="hidden" name="id_nilai" value=<?php echo $_GET['id_nilai'];?>>
                <input type="submit" name="update" value="UBAH">
				</td>
            </tr>
        </table>
    </form>
</body>
</html>