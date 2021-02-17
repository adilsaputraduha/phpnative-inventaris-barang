<?php  
include("../koneksi.php"); 

    if (isset($_POST['simpan'])){

        $kodepell = $_POST['kdplg'];
        $namapell = $_POST['namaplg'];
        $satuanpell = $_POST['alamatplg'];
        $notelppell = $_POST['notelponplg'];

        $sql = "INSERT INTO pelanggan1810005 VALUES('$kodepell','$namapell','$satuanpell','$notelppell')";
        $tambah_pelanggan = mysql_query($sql); 

        if ($tambah_pelanggan){
            echo "<script> document.location='home.php?p=datapelanggan'</script>";
        }else{
            echo"<script>window.alert('Proses Tambah Data Gagal');window.location='home.php?p=formtambahpelanggan';</script>";
        }
    }
?>