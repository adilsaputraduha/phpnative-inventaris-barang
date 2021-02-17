<?php
session_start();
include"koneksi.php";

$userid = $_POST['username'];
$pass = $_POST['pass'];

$mysql_view = mysql_query("SELECT * FROM admin1810005 WHERE adminid1810005='$userid' AND adminpass1810005=md5('$pass')");
$data = mysql_num_rows($mysql_view);
	
if($data > 0){
	$_SESSION['username'] = $userid;
	$_SESSION['status'] = "login";
	
	echo"<script>window.location='templatehome/home.php';</script>";
}else{
	echo"<script>window.alert('USERNAME ATAU PASSWORD SALAH');window.location='index.php';</script>";
}

?>