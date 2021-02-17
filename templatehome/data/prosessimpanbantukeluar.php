<?php 
    include("../koneksi.php"); 
    
    if (isset($_POST['ok'])) {

        $kdbrg = $_POST['kdbrg'];
        $qty = $_POST['jml'];
        $hrg = $_POST['hrgbrg']; 
        
        $sql_tambah_brg = "INSERT INTO bantu1810005(idbrg1810005,qty1810005,hrg1810005) 
        VALUES('$kdbrg','$qty','$hrg')";
        $tambahbarang = mysql_query($sql_tambah_brg);
        
        if ($tambahbarang) {
            echo "<script>   document.location='home.php?p=formtambahbarangmasuk'</script>";
        } else {
            echo "Gagal Tambah Barang";
        }
    } elseif (isset($_POST['simpan'])) {

        $nofak = $_POST['nofak'];
        $tglmasuk = $_POST['tglmasuk'];
        $kdpem = $_POST['kdpem'];
        $kdbrg = $_POST['kdbrg'];
        $qty = $_POST['jml'];
        $hrgbrg = $_POST['hrgbrg'];
        
        $sql_tambah_brgmasuk = "INSERT INTO barangmasuk1810005 VALUES('$nofak','$tglmasuk','$kdpem')";
        $tambahbrgmasuk = mysql_query($sql_tambah_brgmasuk);
        
        $sql_tambah_detail_brg = "INSERT INTO detailmasuk1810005(detailnofak1810005,detailkdbrg1810005,
        detailqty1810005,detailhrgbrg1810005) select '$nofak',idbrg1810005,qty1810005,hrg1810005 from bantu1810005";
        $tambahdetail_brg = mysql_query($sql_tambah_detail_brg);
        
        $hapus_bantu = "delete from bantu1810005";
        $hapus = mysql_query($hapus_bantu);
        
        if ($tambahbrgmasuk) {
            echo "<script>   document.location='home.php?p=databarangmasuk'</script>";
        } else {
            echo "Gagal Tambah Jadwal";
        }
    }
?> 