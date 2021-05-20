<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Type</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Edit Data Type</h2>
		<h3>Polrestabes Semarang</h3>
	</div>

	<br />
	<a href="index.php">
		<button>Kembali ke Menu</button>
	</a>
	
	<h3>Edit Table Type</h3>
	<form action="proses_edit_type.php" method="post">
		<?php 
		include "koneksi.php";
		$type = $_GET['Type_HP'];

		$query = mysqli_query($con, "SELECT * FROM type_ WHERE Type_HP = '$type'") or die(mysqli_error($con));
		$data = mysqli_fetch_array($query);
		?>		
		<table>
			<tr>
				<td>
					<input type="hidden" name="Type_HP" value="<?php echo $data['Type_HP'] ?>">
					</tr>
					<tr>
					<td>Id Merk</td>
					<td><input type="text" name="Id_Merk" value="<?php echo $data['Id_Merk'] ?>" required></td>
					</tr>
					<tr>
					<td>Ukuran</td>
                    <td><input type="text" name="Ukuran" value="<?php echo $data['Ukuran'] ?>" required></td>
					</tr>
					<tr>
					<td>Harga</td>
                    <td><input type="text" name="Harga" value="<?php echo $data['Harga'] ?>" required>
				</td>					
			</tr>	
				<td></td>
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>
