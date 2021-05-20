<?php 
include 'koneksi.php';

$id_ = $_GET['Id_HP'];

$query = mysqli_query($con, "DELETE FROM handphone WHERE Id_HP = '$id_'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='Table_HP.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='Table_HP.php';</script>";
}