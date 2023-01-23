<?php
include('../../../conf/config.php');
$id   = $_POST['id'];
$nama = $_POST['nama'];
$kode = $_POST['kode'];
$harga = $_POST['harga'];

//nama Foto//
$nama_file = $_FILES['foto']['name'];
//echo $nama_file;

//Lokasi Foto//
$file_tmp  = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp,'../../foto/'.$nama_file);
$query = mysqli_query($koneksi,"UPDATE `tb_barang` SET `nama`='$nama',`kode`='$kode',`harga`='$harga',`foto`='$nama_file' WHERE id='$id'");
header('Location: ../../index.php?page=data-barang');
?>