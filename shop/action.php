<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
 require '../conf/config.php';
 kodebarang($_GET['search']);
}

function kodebarang($search){
 global $koneksi;
 
 if ($koneksi->connect_error) {
     die("Koneksi Gagal: " . $koneksi->connect_error);
 }
 
 $sql = "SELECT * FROM tb_barang WHERE nama LIKE '%$search%' ORDER BY nama ASC";
 $result = $koneksi->query($sql);
 
 if ($result->num_rows > 0) {
     $list = array();
     $key=0;
     while($row = $result->fetch_assoc()) {
         $list[$key]['id'] = $row['kode'];
         $list[$key]['text'] = $row['nama']; 
   
     $key++;
     }
     echo json_encode($list);
 } else {
     echo "hasil kosong";
 }
 $koneksi->close();
}
 
?>