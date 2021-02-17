<?php 
include("../koneksi.php");

$kodepelanggan = $_POST['kdpelg'];
$namapelanggan = $_POST['namapelg'];
$alamatpelanggan = $_POST['alamatpelg'];
$notelppelanggan = $_POST['notelppelg'];

$edit = "update pelanggan1810005 set namaplg1810005='$namapelanggan', alamatplg1810005='$alamatpelanggan', 
notlpplg1810005='$notelppelanggan' where kodeplg1810005='$kodepelanggan'";
$update = mysql_query($edit);

if($update){
    echo "<script> document.location='home.php?p=datapelanggan'</script>";
}else{
    echo"<script>window.alert('Proses Update Data Gagal');window.location='home.php?p=formeditpelanggan';</script>";
}

?>