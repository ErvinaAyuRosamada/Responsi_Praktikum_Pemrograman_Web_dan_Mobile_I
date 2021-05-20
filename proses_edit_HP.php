<?php 
include 'koneksi.php';

$id_ = $_POST['Id_HP'];
$type = $_POST['Type_HP'];
$warna = $_POST['Warna'];
$stok = $_POST['Stok'];

$query = mysqli_query($con, "UPDATE handphone SET Type_HP='$type', Warna='$warna', Stok='$stok' WHERE Id_HP='$id_'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='Table_HP.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}
