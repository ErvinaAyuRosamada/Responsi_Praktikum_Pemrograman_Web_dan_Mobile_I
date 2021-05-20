<!DOCTYPE html>
<html>
<head>
	<title>Edit Data handphone</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Edit Data Handphone</h2>
	</div>

	<br />
	<a href="index.php">
		<button>Kembali ke Menu</button>
	</a>
	
	<h3>Edit Handphone</h3>
	<form action="proses_edit_HP.php" method="post">
		<?php 
		include "koneksi.php";
		$id_ = $_GET['Id_HP'];

		$query = mysqli_query($con, "SELECT * FROM handphone WHERE Id_HP = '$id_'") or die(mysqli_error($con));
		$data = mysqli_fetch_array($query);
		?>		
		<table>
			<tr>
			<td><input type="hidden" name="Id_HP" value="<?php echo $data['Id_HP'] ?>">
                    </td>
					</tr>
			<tr>
			<td>Type HP</td>
			<td><input type="text" name="Type_HP" value="<?php echo $data['Type_HP'] ?>" required>
                    </td>
					</tr>
			<tr>
			<td>Warna</td>
			<td><input type="text" name="Warna" value="<?php echo $data['Warna'] ?>" required>
                    </td>
					</tr>
			<tr>
			<td>Stok</td>
			<td><input type="text" name="Stok" value="<?php echo $data['Stok'] ?>" required>
				</td>					
			</tr>	
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>
