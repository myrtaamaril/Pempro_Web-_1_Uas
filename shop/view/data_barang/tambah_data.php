<?php
include('../../../conf/config.php');
$nama = $_GET['nama'];
$kode = $_GET['kode'];
$harga = $_GET['harga'];
$query = mysqli_query($koneksi,"INSERT INTO `tb_barang`(`id`, `nama`, `kode`, `harga`) VALUES ('','$nama','$kode','$harga')");
header('Location: ../../index.php?page=data-barang');
?>