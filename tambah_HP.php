<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Table Handphone</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
	</div>
	<br />
	<a href="index.php">
		<button>Kembali ke Menu</button>
	</a>

	<h3>Input Table Handphone</h3>
	<form action="proses_tambah_HP.php" method="post">		
		<table>
			<tr>
				<td>Type HP</td>
				<td><input type="text" name="Type_HP" required></td>
				</tr>
				<tr>
				<td>Warna</td>
				<td><input type="text" name="Warna" required></td>	
				</tr>
				<tr>
				<td>Stok</td>			
				<td><input type="text" name="Stok" required></td>	
			</tr>
            </tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>					
			</tr>
		</table>
	</form>
	
</body>
</html>