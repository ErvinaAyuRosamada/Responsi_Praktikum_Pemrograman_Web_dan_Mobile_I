<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Table Header Bayar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
	</div>
	<br />
	<a href="index.php">
		<button>Kembali ke Menu</button>
	</a>

	<h3>Input Table Header Bayar</h3>
	<form action="proses_tambah_header.php" method="post">		
		<table>
			<tr>
				<td>Tanggal dan Waktu</td>
				<td><input type="text" name="Tanggal_Waktu" required></td>	
				</tr>
                <tr>
				<td>Id Detail</td>
				<td><input type="text" name="Id_Detail" required></td>	
				</tr>
                <tr>
				<td>Total Bayar</td>
				<td><input type="text" name="Total_Bayar" required></td>	
				</tr>
                <tr>
				<td>Bayar</td>
				<td><input type="text" name="Bayar" required></td>	
				</tr>
                <tr>
				<td>Sisa Bayar</td>
				<td><input type="text" name="Sisa_Bayar" required></td>	
				</tr>
            </tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>					
			</tr>
		</table>
	</form>
	
</body>
</html>