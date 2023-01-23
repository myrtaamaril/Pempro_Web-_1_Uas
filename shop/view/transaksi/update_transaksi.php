<?php
include('../../../conf/config.php');
$nama       = $_POST['nama'];
$harga      = $_POST['harga'];
$jumlah     = $_POST['jumlah'];
$tanggal    = $_POST['tanggal'];
$id    = $_POST['id'];


$query = mysqli_query($koneksi,"UPDATE `tb_transaksi` SET `nama`='$nama',`harga`='$harga',`jumlah`='$jumlah',`tanggal`='$tanggal' WHERE id='$id'");
header('Location: ../../index.php?page=transaksi-data');
?>