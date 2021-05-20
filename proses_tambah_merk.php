<?php 
include 'koneksi.php';

$nama = $_POST['Nama_Merk'];

$query = mysqli_query($con, "INSERT INTO type_ (Nama_Merk) VALUES ('$nama')") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='Table_Merk.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
?>