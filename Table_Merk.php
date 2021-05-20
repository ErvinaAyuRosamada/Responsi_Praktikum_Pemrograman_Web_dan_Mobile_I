<!DOCTYPE html>
<html>
<head>
	<title>Table Merk</title>
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
<a href="tambah_Merk.php">
		<button>INSERT</button>
	</a>
        <table border="1" align="center" class="table">
			<tr>
				<th>Id Merk</th>
                <th>Nama Merk</th>
				<th>Action</th>
			</tr>
			<?php 
			include "koneksi.php";
			$query = mysqli_query($con, "SELECT * FROM Merk") or die(mysqli_error($con));
			$nomor = 1;
			while($data = mysqli_fetch_array($query)) { ?>
				<tr>
					<td><?php echo $data['Id_Merk']; ?></td>
                    <td><?php echo $data['Nama_Merk']; ?></td>
					<td width="90px" align="center">
						<a href="edit_Merk.php?Id_Merk=<?php echo $data['Id_Merk']; ?>"><button>Edit</button></a> 
						<a href="proses_hapus_Merk.php?Type_HP=<?php echo $data['Id_Merk']; ?>" onclick="return confirm('Yakin hapus data?')"><button>Hapus</button></a>					
					</td>
				</tr>
			<?php
			} ?>
		</table>
        <br />