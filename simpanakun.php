<?php 
    include 'koneksi.php';
    $user=$_POST['username'];
    $name=$_POST['fullname'];
    $pass=md5($_POST['pass']);
    $level = 1;
	
    $sql = "insert into admin1810005 values ('$user','$name','$pass','$level')";
    $tambah_barang = mysql_query($sql);

    if ($tambah_barang){
        echo"<script>window.alert('Berhasil... Silahkan Login');window.location='index.php';</script>";
    }else{
        echo"<script>window.alert('Proses Tambah Data Gagal');window.location='buatakun.php';</script>";
    }
    
?>
