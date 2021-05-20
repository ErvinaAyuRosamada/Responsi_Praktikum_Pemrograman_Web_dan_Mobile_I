<?php 
include 'koneksi.php';

$id_ = $_POST['Id_HP'];
$jumlah= $_POST['Jumlah_Beli'];

$query = mysqli_query($con, "INSERT INTO detail_bayar (Id_HP, Jumlah_Beli) VALUES ('$id_', '$jumlah')") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='Table_Detail.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
?>