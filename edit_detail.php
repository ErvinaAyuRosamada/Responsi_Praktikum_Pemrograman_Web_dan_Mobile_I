<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Detail Bayar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Edit Data Detail Bayar</h2>
	</div>

	<br />
	<a href="index.php">
		<button>Kembali ke Menu</button>
	</a>
	
	<h3>Edit Detail Bayar</h3>
	<form action="proses_edit_detail.php" method="post">
		<?php 
		include "koneksi.php";
		$id_d = $_GET['Id_Detail'];

		$query = mysqli_query($con, "SELECT * FROM detail_bayar WHERE Id_Detail = '$id_d'") or die(mysqli_error($con));
		$data = mysqli_fetch_array($query);
		?>		
		<table>
			<tr>
			<td><input type="hidden" name="Id_Detail" value="<?php echo $data['Id_Detail'] ?>">
                    </td>
					</tr>
			<tr>
			<td>Id HP</td>
			<td><input type="text" name="Id_HP" value="<?php echo $data['Id_HP'] ?>" required>
                    </td>
					</tr>
			<tr>
			<td>Jumlah Beli</td>
			<td><input type="text" name="Jumlah_Beli" value="<?php echo $data['Jumlah_Beli'] ?>" required>
				</td>					
			</tr>	
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>
