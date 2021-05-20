<!DOCTYPE html>
<html>
<head>
	<title>Table Handphone</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="judul">		
		<h2>Table handphone</h2>
	</div>
	<br />
    <a href="index.php">
		<button>Kembali ke Menu</button>
	</a>
	<a href="tambah_HP.php">
		<button>INSERT</button>
	</a>
        <table border="1" align="center" class="table">
			<tr>
				<th>Id HP</th>
				<th>Type HP</th>
                <th>Warna</th>
                <th>Stok</th>
				<th>Action</th>
			</tr>
			<?php 
			include "koneksi.php";
			$query = mysqli_query($con, "SELECT * FROM handphone") or die(mysqli_error($con));
			$nomor = 3;
			while($data = mysqli_fetch_array($query)) { ?>
				<tr>
				<td><?php echo $data['Id_HP']; ?></td>
					<td><?php echo $data['Type_HP']; ?></td>
                    <td><?php echo $data['Warna']; ?></td>
                    <td><?php echo $data['Stok']; ?></td>
					<td width="90px" align="center">
						<a href="edit_HP.php?Id_HP=<?php echo $data['Id_HP']; ?>"><button>Edit</button></a> 
						<a href="proses_hapus_HP.php?Id_HP=<?php echo $data['Id_HP']; ?>" onclick="return confirm('Yakin hapus data?')"><button>Hapus</button></a>					
					</td>
				</tr>
			<?php
			} ?>
		</table>