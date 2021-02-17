<?php 
include("../koneksi.php");

$kodepemsk = $_POST['kodepmsk'];
$namapemsk = $_POST['namapmsk'];
$alamatpemsk = $_POST['alamatpmsk'];
$notelppemsk = $_POST['notelppmsk'];

$edit = "update pemasok1810005 set namapmsk1810005='$namapemsk', alamatpmsk1810005='$alamatpemsk', 
notlppmsk1810005='$notelppemsk' where kodepmsk1810005='$kodepemsk'";
$update = mysql_query($edit);

if($update){
    echo "<script> document.location='home.php?p=datapemasok'</script>";
}else{
    echo"<script>window.alert('Proses Update Data Gagal');window.location='home.php?p=formeditpemasok';</script>";
}

?>