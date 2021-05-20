<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Table Detail Bayar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
	</div>
	<br />
	<a href="index.php">
		<button>Kembali ke Menu</button>
	</a>

	<h3>Input Table Detail Bayar</h3>
	<form action="proses_tambah_detail.php" method="post">		
		<table>
			<tr>
				<td>Id HP</td>
				<td><input type="text" name="Id_HP" required></td>
				</tr>
				<tr>
				<td>Jumlah Beli</td>
				<td><input type="text" name="Jumlah_Beli" required></td>	
				</tr>
            </tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>					
			</tr>
		</table>
	</form>
	
</body>
</html>