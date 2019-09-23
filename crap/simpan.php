<?php
session_start();
 
//koneksi ke database
include "inc/koneksi.php";
 
//data array yang akan disimpan
$data_serialize = serialize($data); 
 
$sql = "INSERT INTO tb_scrap(Nama, Harga, Kategori, Deskripsi) VALUES ('" . session_id() . "','" . serialize($data) . "')";
mysqli_query($connection, $sql);
 
//tutup koneksi ke database
mysqli_close($connection);
?>