<?php 
include 'koneksi.php';

$id = $_POST['Id_Merk'];
$ukuran= $_POST['Ukuran'];
$harga= $_POST['Harga'];

$query = mysqli_query($con, "INSERT INTO type_ (Id_Merk, Ukuran, Harga) VALUES ('$id', '$ukuran', '$harga')") or die(mysqli_error($con));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='Table_Type.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}
?>