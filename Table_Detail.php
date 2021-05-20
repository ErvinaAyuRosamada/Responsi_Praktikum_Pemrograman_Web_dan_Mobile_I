<!DOCTYPE html>
<html>
<head>
	<title>Table Detail Bayar</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="judul">		
		<h2>Table Detail Bayar</h2>
	</div>
	<br />
    <a href="index.php">
		<button>Kembali ke Menu</button>
	</a>
	<a href="tambah_detail.php">
		<button>INSERT</button>
	</a>
        <table border="1" align="center" class="table">
			<tr>
                <th>Id Detail</th>
				<th>Id HP</th>
				<th>Jumlah Beli</th>
				<th>Action</th>
			</tr>
			<?php 
			include "koneksi.php";
			$query = mysqli_query($con, "SELECT * FROM detail_bayar") or die(mysqli_error($con));
			$nomor = 4;
			while($data = mysqli_fetch_array($query)) { ?>
				<tr>
                <td><?php echo $data['Id_Detail']; ?></td>
				<td><?php echo $data['Id_HP']; ?></td>
					<td><?php echo $data['Jumlah_Beli']; ?></td>
					<td width="90px" align="center">
						<a href="edit_detail.php?Id_Detail=<?php echo $data['Id_Detail']; ?>"><button>Edit</button></a> 
						<a href="proses_hapus_detail.php?Id_Detail=<?php echo $data['Id_Detail']; ?>" onclick="return confirm('Yakin hapus data?')"><button>Hapus</button></a>					
					</td>
				</tr>
			<?php
			} ?>
		</table>