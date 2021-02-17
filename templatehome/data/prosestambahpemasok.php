<?php  
include("../koneksi.php"); 

    if (isset($_POST['simpan'])){

        $kodepemsk = $_POST['kdpmsk'];
        $namapemsk = $_POST['namapmsk'];
        $satuanpemsk = $_POST['alamatpmsk'];
        $notelppemsk = $_POST['notelponpmsk'];

        $sql = "INSERT INTO pemasok1810005 VALUES('$kodepemsk','$namapemsk','$satuanpemsk','$notelppemsk')";
        $tambah_pemasok = mysql_query($sql); 

        if ($tambah_pemasok){
            echo "<script> document.location='home.php?p=datapemasok'</script>";
        }else{
            echo"<script>window.alert('Proses Tambah Data Gagal');window.location='home.php?p=formtambahpemasok';</script>";
        }
    }
?>