<html>
    <head>  
        <title>Cetak PDF</title>
        <div style="padding:4mm;" align="center">
            <label style="font-size:25px;">Toko Sanak - Computer</label><br>
            <label style="font-size:19px;">Komp. Parupuk Raya Blok H.6 Parupuk Tabing, Padang Sumatera Barat</label>
        </div>
        <hr><hr>
        <div style="padding:20px 0 10px 0; font-size:18px;" align="center">
            Laporan Data Admin
            <br><br>
        </div>
        <style>
            .table1 {
                font-family: sans-serif;
                color: #444;
                border-collapse: collapse;
                width: 100%;
                border: 1px solid #f2f5f7;
            }
            
            .table1 tr th{
                background: #35A9DB;
                color: #fff;
            }
            
            .table1, th, td {
                padding: 8px 20px;
                text-align: center;
            }
            
            .table1 tr:hover {
                background-color: #f5f5f5;
            }
            
            .table1 tr:nth-child(even) {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <table border="1" width="100%" class="table1" align="center">
            <tr>
                <th>No</th>
                <th>Kode Admin</th>
                <th>Nama Admin</th>
            </tr>
            <?php
                include '../../koneksi.php';

                if (isset($_POST['cetak'])) {
                    $no = 1;
                    $ko = $_POST['kode1'];
                    $kod = $_POST['kode2'];
                    //$query = ""; // Tampilkan semua data
                    $sql = mysql_query("SELECT * from admin1810005 where adminid1810005 between '$ko' and '$kod'");
                    // Eksekusi/Jalankan query dari variabel $query
                    $row = mysql_num_rows($sql);
                    if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysql_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            echo "<tr>";
                            echo "<td>".$no++."</td>";
                            echo "<td>".$data['adminid1810005']."</td>";
                            echo "<td>".$data['adminnamalengkap1810005']."</td>";
                            $row = mysql_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                            echo "</tr>";
                        }
                    }else{ // Jika data tidak ada
                        echo "<tr><td colspan='9'>Data tidak ada</td></tr>";
                    }
                        ?>
                <?php
                }
            ?>
        </table>
    </body>
</html>
<script type="text/javascript">
      window.onload = function() { window.print(); }
 </script>
                            