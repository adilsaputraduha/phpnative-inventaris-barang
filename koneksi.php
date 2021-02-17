<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_penjualan_1810005";

$connect = mysql_connect($host,$username,$password);
mysql_select_db($database,$connect) or Die("Gagal Koneksi ke Database");

?>