<?php 
include 'koneksi.php';

$no_ = $_GET['No_Nota'];

$query = mysqli_query($con, "DELETE FROM header_bayar WHERE No_Nota = '$no_'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='Table_Header.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='Table_Header.php';</script>";
}