<!DOCTYPE html>
<html>
<head>
	<title>Tambah data table Type</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
	</div>
	<br />
	<a href="index.php">
		<button>Kembali ke Menu</button>
	</a>

	<h3>Input Table Type</h3>
	<form action="proses_tambah_type.php" method="post">		
		<table>
			<tr>
				<td>Id merk</td>
				<td><input type="text" name="Id_Merk" required></td>					
			</tr>	
			<tr>
				<td>ukuran</td>
				<td><input type="text" name="Ukuran" required></td>					
			</tr>	
			<tr>
				<td>Harga</td>
				<td><input type="text" name="Harga" required></td>					
			</tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>