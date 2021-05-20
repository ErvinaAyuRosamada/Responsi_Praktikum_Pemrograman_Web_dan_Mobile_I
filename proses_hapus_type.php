<?php 
include 'koneksi.php';

$type = $_GET['Type_HP'];

$query = mysqli_query($con, "DELETE FROM type_ WHERE Type_HP = '$type'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='Table_Type.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='Table_Type.php';</script>";
}