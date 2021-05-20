<!DOCTYPE html>
<html>
<head>
	<title>Table Type</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="judul">		
		<h2>Table Type</h2>
	</div>
	<br />
	<a href="index.php">
		<button>Kembali ke Menu</button>
	</a>
<a href="tambah_type.php">
		<button>INSERT</button>
	</a>
        <table border="1" align="center" class="table">
			<tr>
				<th>Type HP</th>
				<th>Id Merk</th>
                <th>Ukuran</th>
                <th>Harga</th>
				<th>Action</th>
			</tr>
			<?php 
			include "koneksi.php";
			$query = mysqli_query($con, "SELECT * FROM type_") or die(mysqli_error($con));
			$nomor = 2;
			while($data = mysqli_fetch_array($query)) { ?>
				<tr>
				<td><?php echo $data['Type_HP']; ?></td>
					<td><?php echo $data['Id_Merk']; ?></td>
                    <td><?php echo $data['Ukuran']; ?></td>
                    <td><?php echo $data['Harga']; ?></td>
					<td width="90px" align="center">
						<a href="edit_type.php?Type_HP=<?php echo $data['Type_HP']; ?>"><button>Edit</button></a> 
						<a href="proses_hapus_type.php?Type_HP=<?php echo $data['Type_HP']; ?>" onclick="return confirm('Yakin hapus data?')"><button>Hapus</button></a>					
					</td>
				</tr>
			<?php
			} ?>
		</table>
        <br />