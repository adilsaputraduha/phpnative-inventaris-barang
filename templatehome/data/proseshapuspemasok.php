<?php 
include("../koneksi.php");

$sql = "delete from pemasok1810005 where kodepmsk1810005='$_REQUEST[kodepmsk]'";
$hapus = mysql_query($sql);

if($hapus){
    echo"<script>window.location='home.php?p=datapemasok';</script>";
}else{
    echo"<script>window.alert('Proses Hapus Data Gagal');window.location='home.php?p=datapemasok';</script>";
}
?>