<?php
include 'setting.php';
$id = $_GET['id'];
$query="DELETE FROM table_barang WHERE id_barang=$id";
$sql= mysqli_query($koneksi,$query);
if($sql){
    echo "data berhasil di hapus";
    header('location:index.php');
}else{
    echo "data gagal terhapus";
}