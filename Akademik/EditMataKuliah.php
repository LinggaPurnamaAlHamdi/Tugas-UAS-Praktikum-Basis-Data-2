<?php
include_once("Koneksi.php");

if(isset($_POST['update']))
{   
	
	$kode_mk = $_POST['kode_mk'];
	$nama_mk = $_POST['nama_mk'];
	$sks = $_POST['sks'];
	$semester = $_POST['semester'];

    $result = mysqli_query($mysqli, "UPDATE matkul SET kode_mk='$kode_mk',nama_mk='$nama_mk',sks='$sks',semester='$semester' WHERE kode_mk=$kode_mk");

    header("Location: MataKuliah.php");
}
?>
<?php
$kode_mk = $_GET['kode_mk'];

$result = mysqli_query($mysqli, "SELECT * FROM matkul WHERE kode_mk=$kode_mk");

while($user_data = mysqli_fetch_array($result))
{
    $kode_mk = $user_data['kode_mk'];
    $nama_mk = $user_data['nama_mk'];
    $sks = $user_data['sks'];
	$semester = $user_data['semester'];

}
?>
<html>
<head>  
    <title>Ubah Data Mata Kuliah</title>
</head>

<body bgcolor = "#70a1ff">
	<h2 align = "center"> <u> Ubah Data Mata Kuliah </u> </h2>

    <form action = "EditMataKuliah.php" method = "post" name = "update_matkul">
        <table align = "center" width = "30%" border="1">
            <tr> 
                <td> Kode Mata Kuliah </td>
                <td><input type="text" name="kode_mk" value=<?php echo $kode_mk;?> disabled></td>
            </tr>
            <tr> 
                <td> Nama Mata Kuliah </td>
                <td><input type="text" name="nama_mk" value=<?php echo $nama_mk;?>></td>
            </tr>
            <tr> 
                <td> SKS </td>
                <td><input type="text" name="sks" value=<?php echo $sks;?>></td>
            </tr>
			<tr>
				<td> Semester </td>
				<td><input type="text" name="semester" value=<?php echo $semester;?>></td>
			</tr>
            <tr>
                <td colspan = "2" align = "center">
				<input type="hidden" name="kode_mk" value=<?php echo $_GET['kode_mk'];?>>
                <input type="submit" name="update" value="UBAH">
				</td>
            </tr>
        </table>
    </form>
</body>
</html>