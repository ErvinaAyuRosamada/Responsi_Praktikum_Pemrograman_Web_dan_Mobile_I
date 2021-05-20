<?php 
include 'koneksi.php';

$type = $_POST['Type_HP'];
$warna= $_POST['Warna'];
$stok= $_POST['Stok'];

$query = mysqli_query($con, "INSERT INTO handphone (Type_HP, Warna, Stok) VALUES ('$type', '$warna', '$stok')") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='Table_HP.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
?>