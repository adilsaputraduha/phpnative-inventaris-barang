<?php 
include("../koneksi.php");

$sql = "delete from detailmasuk1810005 where detailnofak1810005='$_REQUEST[nofakmasuk]'";
$hapus = mysql_query($sql);

$sql_hapus = "delete from barangmasuk1810005 where nofakmasuk1810005='$_REQUEST[nofakmasuk]'";
$hapus = mysql_query($sql_hapus);

if($hapus){
    echo"<script>window.location='home.php?p=databarangmasuk';</script>";
}else{
    echo"<script>window.alert('Proses Hapus Data Gagal');window.location='home.php?p=databarangmasuk';</script>";
}
?>