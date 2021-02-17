<?php 
include("../koneksi.php");

$sql = "delete from detailkeluar1810005 where detailnofakkeluar1810005='$_REQUEST[nofakkeluar]'";
$hapus = mysql_query($sql);

$sql_hapus = "delete from barangkeluar1810005 where nofakkeluar1810005='$_REQUEST[nofakkeluar]'";
$hapus = mysql_query($sql_hapus);

if($hapus){
    echo"<script>window.location='home.php?p=databarangkeluar';</script>";
}else{
    echo"<script>window.alert('Proses Hapus Data Gagal');window.location='home.php?p=databarangkeluar';</script>";
}
?>  