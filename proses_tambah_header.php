<?php 
include 'koneksi.php';

$tgl= $_POST['Tanggal_Waktu'];
$id_d= $_POST['Id_Detail'];
$total= $_POST['Total_Bayar'];
$bayar= $_POST['Bayar'];
$sisa= $_POST['Sisa_Bayar'];

$query = mysqli_query($con, "INSERT INTO header_bayar (Tanggal_Waktu, Id_Detail, Total_Bayar, Bayar, Sisa_Bayar) VALUES ('$tgl','$id_d','$total','$bayar','$sisa')") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='Table_Header.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
?>