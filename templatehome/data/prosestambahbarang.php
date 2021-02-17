<?php  
include("../koneksi.php"); 

    if (isset($_POST['simpan'])){

        $kdbarg = $_POST['kdbrg'];
        $namabarg = $_POST['namabrg'];
        $satuanbarg = $_POST['stuanbrg'];
        $hrgbarg = $_POST['hrgbrg'];
        $stokbarg = $_POST['stokbrg'];

        $sql = "INSERT INTO barang1810005 VALUES('$kdbarg','$namabarg','$satuanbarg','$hrgbarg','$stokbarg')";
        $tambah_barang = mysql_query($sql); 

        if ($tambah_barang){
            echo "<script> document.location='home.php?p=databarang'</script>";
        }else{
            echo"<script>window.alert('Proses Tambah Data Gagal');window.location='home.php?p=formtambahbarang';</script>";
        }
    }
?>