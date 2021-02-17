<?php 
include '../koneksi.php';
$user=$_POST['user'];
$lama=md5($_POST['lama']);
$baru=$_POST['baru'];
$ulang=$_POST['baruu'];

$cek=mysql_query("select * from admin1810005 where adminpass1810005='$lama' and adminid1810005='$user'");
if(mysql_num_rows($cek)==1){
	if($baru==$ulang){
		$b = md5($baru);
		mysql_query("update admin1810005 set adminpass1810005='$b' where adminid1810005='$user'");
		echo"<script>window.alert('Berhasil... Silahkan Login Ulang');window.location='../index.php';</script>";
	}else{
		echo"<script>window.alert('Password Beda');window.location='home.php?p=formchangepassword';</script>";
	}
}else{
	echo"<script>window.alert('Proses Tukar Password Gagal');window.location='home.php?p=awal';</script>";
}

 ?>