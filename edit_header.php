<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Header Bayar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Edit Data Header Bayar</h2>
	</div>

	<br />
	<a href="index.php">
		<button>Kembali ke Menu</button>
	</a>
	
	<h3>Edit Header Bayar</h3>
	<form action="proses_edit_header.php" method="post">
		<?php 
		include "koneksi.php";
		$no_ = $_GET['No_Nota'];

		$query = mysqli_query($con, "SELECT * FROM header_bayar WHERE No_Nota = '$no_'") or die(mysqli_error($con));
		$data = mysqli_fetch_array($query);
		?>		
		<table>
			<tr>
			<td><input type="hidden" name="No_Nota" value="<?php echo $data['No_Nota'] ?>">
                    </td>
					</tr>
			<tr>
			<td>Tanggal dan Waktu</td>
			<td><input type="text" name="Tanggal_Waktu" value="<?php echo $data['Tanggal_Waktu'] ?>" required>
                    </td>
					</tr>
			<tr>
			<td>Id Detail</td>
			<td><input type="text" name="Id_Detail" value="<?php echo $data['Id_Detail'] ?>" required>
				</td>					
			    </tr>
                <tr>
			<td>Total Bayar</td>
			<td><input type="text" name="Total_Bayar" value="<?php echo $data['Total_Bayar'] ?>" required>
				</td>					
			    </tr>
                <tr>
			<td>Bayar</td>
			<td><input type="text" name="Bayar" value="<?php echo $data['Bayar'] ?>" required>
				</td>					
			    </tr>
                <tr>
			<td>SIsa Bayar</td>
			<td><input type="text" name="Sisa_Bayar" value="<?php echo $data['Sisa_Bayar'] ?>" required>
				</td>					
			    </tr>
				<td><button type="submit">Simpan</button></td>				
			</tr>				
		</table>
	</form>
</body>
</html>
