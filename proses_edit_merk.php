<?php 
include 'koneksi.php';

$id = $_POST['Id_Merk'];
$nama = $_POST['Nama_Merk'];

$query = mysqli_query($con, "UPDATE type_ SET Nama_Merk='$nama'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='Table_Merk.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}
