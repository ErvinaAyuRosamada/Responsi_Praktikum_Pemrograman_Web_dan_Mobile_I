<?php 
include 'koneksi.php';

$type = $_POST['Type_HP'];
$id = $_POST['Id_Merk'];
$ukuran = $_POST['Ukuran'];
$harga = $_POST['Harga'];

$query = mysqli_query($con, "UPDATE type_ SET Id_Merk='$id', Ukuran='$ukuran', Harga='$harga' WHERE Type_HP='$type'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='Table_Type.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}
