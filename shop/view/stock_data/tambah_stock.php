<?php
include('../../../conf/config.php');
$nama = $_GET['nama'];
$kode = $_GET['kode'];
$stock = $_GET['stock'];
$query = mysqli_query($koneksi,"INSERT INTO `tb_stock`(`id`, `nama`, `kode`, `stock`) VALUES ('','$nama','$kode','$stock')");
header('Location: ../../index.php?page=stock-data');
?>