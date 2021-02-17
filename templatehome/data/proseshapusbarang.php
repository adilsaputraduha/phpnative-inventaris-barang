<?php 
include("../koneksi.php");

$sql = "delete from barang1810005 where kdbrg1810005='$_REQUEST[kdbrg]'";
$hapus = mysql_query($sql);

if($hapus){
    echo"<script>window.location='home.php?p=databarang';</script>";
}else{
    echo"<script>window.alert('Proses Hapus Data Gagal');window.location='home.php?p=databarang';</script>";
}
?>