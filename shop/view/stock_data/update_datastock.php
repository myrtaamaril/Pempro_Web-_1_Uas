<?php
include('../../../conf/config.php');
$id   = $_POST['id'];
$nama = $_POST['nama'];
$kode = $_POST['kode'];
$stock = $_POST['stock'];


$query = mysqli_query($koneksi,"UPDATE `tb_stock` SET `nama`='$nama',`kode`='$kode',`stock`='$stock' WHERE id='$id'");
header('Location: ../../index.php?page=stock-data');
?>