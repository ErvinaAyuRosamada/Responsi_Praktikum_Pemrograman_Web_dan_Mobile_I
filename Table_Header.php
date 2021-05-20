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
	<a href="tambah_header.php">
		<button>INSERT</button>
	</a>
        <table border="1" align="center" class="table">
			<tr>
                <th>No Nota</th>
                <th>Tanggal dan Waktu</th>
                <th>Id Detail</th>
				<th>Total Bayar</th>
				<th>Bayar</th>
                <th>Sisa Bayar</th>
				<th>Action</th>
			</tr>
			<?php 
			include "koneksi.php";
			$query = mysqli_query($con, "SELECT * FROM header_bayar") or die(mysqli_error($con));
			$nomor = 5;
			while($data = mysqli_fetch_array($query)) { ?>
				<tr>
                <td><?php echo $data['No_Nota']; ?></td>
                <td><?php echo $data['Tanggal_Waktu']; ?></td>
                <td><?php echo $data['Id_Detail']; ?></td>
				<td><?php echo $data['Total_Bayar']; ?></td>
				<td><?php echo $data['Bayar']; ?></td>
                <td><?php echo $data['Sisa_Bayar']; ?></td>
					<td width="90px" align="center">
						<a href="edit_header.php?No_Nota=<?php echo $data['No_Nota']; ?>"><button>Edit</button></a> 
						<a href="proses_hapus_header.php?No_Nota=<?php echo $data['No_Nota']; ?>" onclick="return confirm('Yakin hapus data?')"><button>Hapus</button></a>
					</td>
				</tr>
			<?php
			} ?>
		</table>