<?php 
include 'koneksi.php';

$id = $_GET['Id_Merk'];

$query = mysqli_query($con, "DELETE FROM merk WHERE Id_Merk = '$id'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='Table_Merk.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='Table_Merk.php';</script>";
}