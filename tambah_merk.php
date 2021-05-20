<?php
include("./koneksi.php");
$id="";
$nama="";
if(isset($_GET['id'])){
	$id=$_GET['Id_Merk'];
	$nama=$_GET['Nama_Merk'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Table Merk</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
	</div>
	<br />
	<a href="index.php">
		<button>Kembali ke Menu</button>
	</a>

	<h3>Input Table Merk</h3>
	<form action="proses_tambah_merk.php" method="post">		
		<table>
			<tr>
				<td>Nama merk</td>
				<td><input type="text" name="nama_merk" required></td>					
			</tr>
            </tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>					
			</tr>
		</table>
	</form>
	
</body>
</html>