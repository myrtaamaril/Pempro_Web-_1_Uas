<?php
include('../../../conf/config.php');
$nama       = $_GET['nama'];
$harga      = $_GET['harga'];
$jumlah     = $_GET['jumlah'];
$tanggal    = $_GET['tanggal'];

$query = mysqli_query($koneksi,"INSERT INTO `tb_transaksi`(`id`, `nama`, `harga`, `jumlah`, `tanggal`) VALUES ('','$nama ','$harga','$jumlah','$tanggal')");
header('Location: ../../index.php?page=transaksi-data');
?>