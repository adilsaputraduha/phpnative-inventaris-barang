<?php
    include "../koneksi.php";
    $idbrg = $_GET['kdbrg'];
    
    $result = mysql_query("DELETE FROM bantu1810005 WHERE idbrg1810005 = '$idbrg'");
    
    if ($result){ ?>
        <script language="javascript">
            document.location.href="home.php?p=formtambahbarangkeluar";
        </script>
        <?php
    }else {
        trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR);
    }
?> 