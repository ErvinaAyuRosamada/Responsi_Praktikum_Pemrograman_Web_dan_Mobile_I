<?php 
include 'koneksi.php';

$id_d = $_GET['Id_Detail'];

$query = mysqli_query($con, "DELETE FROM detail_bayar WHERE Id_Detail = '$id_d'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='Table_Detail.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='Table_Detail.php';</script>";
}