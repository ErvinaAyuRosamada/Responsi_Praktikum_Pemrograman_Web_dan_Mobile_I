<?php 
include 'koneksi.php';

$no_ = $_POST['No_Nota'];
$tgl = $_POST['Tanggal_Waktu'];
$id_d = $_POST['Id_Detail'];
$total = $_POST['Total_Bayar'];
$bayar = $_POST['Bayar'];
$sisa = $_POST['Sisa_Bayar'];

$query = mysqli_query($con, "UPDATE header_bayar SET No_Nota='$no_', Tanggal_Waktu='$tgl', Id_Detail='$id_d', Total_Bayar='$total', Bayar='$bayar', Sisa_Bayar='$sisa' WHERE No_Nota='$no_'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='Table_Header.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}
