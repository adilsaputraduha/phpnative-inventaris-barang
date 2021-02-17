<?php
    include "../koneksi.php";
    $kdbrg = $_GET['kdbrg'];
    
    $result = mysql_query("DELETE FROM detailmasuk1810005 WHERE detailkdbrg1810005 = '$kdbrg'");
    
    if ($result){ ?>
        <script language="javascript">
            alert('Berhasil Dihapus');
            document.location.href="home.php?p=formeditbarangmasuk";
        </script>
        <?php
    }else {
        trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
    }
?> 