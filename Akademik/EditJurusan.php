<?php
include_once("Koneksi.php");

if(isset($_POST['update']))
{   
	
	$id_jurusan = $_POST['id_jurusan'];
	$nama_jurusan = $_POST['nama_jurusan'];

    $result = mysqli_query($mysqli, "UPDATE jurusan SET id_jurusan='$id_jurusan',nama_jurusan='$nama_jurusan' WHERE id_jurusan=$id_jurusan");

    header("Location: Jurusan.php");
}
?>
<?php
$id_jurusan = $_GET['id_jurusan'];

$result = mysqli_query($mysqli, "SELECT * FROM jurusan WHERE id_jurusan=$id_jurusan");

while($user_data = mysqli_fetch_array($result))
{
    $id_jurusan = $user_data['id_jurusan'];
    $nama_jurusan = $user_data['nama_jurusan'];
}
?>
<html>
<head>  
    <title>Ubah Data Jurusan</title>
</head>

<body bgcolor = "#70a1ff">
	<h2 align = "center"> <u> Ubah Data Jurusan </u> </h2>

    <form action = "EditJurusan.php" method = "post" name = "update_jurusan">
        <table align = "center" width = "30%" border="1">
            <tr> 
                <td>ID Jurusan</td>
                <td><input type="text" name="id_jurusan" value=<?php echo $id_jurusan;?> disabled></td>
            </tr>
            <tr> 
                <td>Nama Jurusan</td>
                <td><input type="text" name="nama_jurusan" value=<?php echo $nama_jurusan;?>></td>
            </tr>
            <tr>
                <td colspan = "2" align = "center">
				<input type="hidden" name="id_jurusan" value=<?php echo $_GET['id_jurusan'];?>>
                <input type="submit" name="update" value="UBAH">
				</td>
            </tr>
        </table>
    </form>
</body>
</html>