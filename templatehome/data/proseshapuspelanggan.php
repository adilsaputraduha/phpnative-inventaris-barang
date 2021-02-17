<?php 
include("../koneksi.php");

$sql = "delete from pelanggan1810005 where kodeplg1810005='$_REQUEST[kodepelg]'";
$hapus = mysql_query($sql);

if($hapus){
    echo"<script>window.location='home.php?p=datapelanggan';</script>";
}else{
    echo"<script>window.alert('Proses Hapus Data Gagal');window.location='home.php?p=datapelanggan';</script>";
}
?>