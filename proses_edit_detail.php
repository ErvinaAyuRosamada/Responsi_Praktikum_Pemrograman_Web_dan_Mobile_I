<?php 
include 'koneksi.php';

$id_d = $_POST['Id_Detail'];
$id_ = $_POST['Id_HP'];
$jumlah = $_POST['Jumlah_Beli'];

$query = mysqli_query($con, "UPDATE Detail_Bayar SET Id_HP='$id_', Jumlah_Beli='$jumlah' WHERE Id_Detail='$id_d'") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='Table_Detail.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}
