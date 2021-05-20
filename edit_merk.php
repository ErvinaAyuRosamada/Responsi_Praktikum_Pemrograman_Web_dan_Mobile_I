<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Merk</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Edit Data Merk</h2>
	</div>

	<br />
	<a href="index.php">
		<button>Kembali ke Menu</button>
	</a>
	
	<h3>Edit Table Merk</h3>
	<form action="proses_edit_merk.php" method="post">
		<?php 
		include "koneksi.php";
		$id = $_GET['Id_Merk'];

		$query = mysqli_query($con, "SELECT * FROM merk WHERE Id_Merk = '$id'") or die(mysqli_error($con));
		$data = mysqli_fetch_array($query);
		?>		
		<table>
				<tr>
				<td>Nama Merk</td>
				<td>
					<input type="hidden" name="Id_Merk" value="<?php echo $data['Id_Merk'] ?>">
					<input type="text" name="Nama_Merk" value="<?php echo $data['Nama_Merk'] ?>" required>
				</td>					
			</tr>	
				<td></td>
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>
