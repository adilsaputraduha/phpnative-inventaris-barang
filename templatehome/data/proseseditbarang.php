<?php 
include("../koneksi.php");

$kdbarg = $_POST['kdbrg'];
$namabarg = $_POST['namabrg'];
$satuanbarg = $_POST['stuanbrg'];
$hrgbarg = $_POST['hrgbrg'];
$stokbarg = $_POST['stokbrg'];

$edit = "update barang1810005 set namabrg1810005='$namabarg', satuanbrg1810005='$satuanbarg', hargabrg1810005='$hrgbarg',
stokbrg1810005='$stokbarg' where kdbrg1810005='$kdbarg'";
$update = mysql_query($edit);

if($update){
    echo "<script> document.location='home.php?p=databarang'</script>";
}else{
    echo"<script>window.alert('Proses Update Data Gagal');window.location='home.php?p=formeditbarang';</script>";
}

?>