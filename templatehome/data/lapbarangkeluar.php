<html>
    <head>  
        <title>Cetak PDF</title>
        <div style="padding:4mm;" align="center">
            <label style="font-size:25px;">Toko Sanak - Computer</label><br>
            <label style="font-size:19px;">Komp. Parupuk Raya Blok H.6 Parupuk Tabing, Padang Sumatera Barat</label>
        </div>
        <hr><hr>
        <div style="padding:20px 0 10px 0; font-size:18px;" align="center">
            Laporan Data Barang Keluar<br>
            <b>Per Bulan</b>
            <br><br>
            <?php
                $bulan = $_POST['bulan'];
                $tahun = $_POST['tahun'];

                if($bulan=='01'){
                    $namabulan = "Januari";
                } else if($bulan=='02'){
                    $namabulan = "Februari";
                } else if($bulan=='03'){
                    $namabulan = "Maret";
                } else if($bulan=='04'){
                    $namabulan = "April";
                } else if($bulan=='05'){
                    $namabulan = "Mei";
                } else if($bulan=='06'){
                    $namabulan = "Juni";
                } else if($bulan=='07'){
                    $namabulan = "Juni";
                } else if($bulan=='08'){
                    $namabulan = "Agustus";
                } else if($bulan=='09'){
                    $namabulan = "September";
                } else if($bulan=='10'){
                    $namabulan = "Oktober";
                } else if($bulan=='11'){
                    $namabulan = "November";
                } else if($bulan=='12'){
                    $namabulan = "Desember";
                }
                echo "$namabulan $tahun";
            ?>
        </div>
        <br>
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
                <th>Tanggal Keluar</th>
                <th>Nama Pelanggan</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Satuan</th>
                <th>Harga Barang</th>
                <th>Jumlah</th>
                <th>Sub Total</th>
            </tr>
            <?php
                include '../../koneksi.php';

                if (isset($_POST['cetak'])) {
                    $bulan = $_POST['bulan'];
                    $tahun=$_POST['tahun'];
                    //$query = ""; // Tampilkan semua data
                    $sql = mysql_query("SELECT nofakkeluar1810005,tglkeluar1810005,namaplg1810005,kdbrg1810005,
                    namabrg1810005,satuanbrg1810005,hargabrg1810005,detailkeluarqty1810005,(hargabrg1810005*detailkeluarqty1810005) 
                    as subtotal FROM barangkeluar1810005 join detailkeluar1810005 on detailnofakkeluar1810005=nofakkeluar1810005 
                    join barang1810005 on detailkeluarkdbrg1810005=kdbrg1810005 join pelanggan1810005 on 
                    keluarkdplg1810005=kodeplg1810005 where month(tglkeluar1810005)='$bulan' and 
                    year(tglkeluar1810005)='$tahun'");
                    // Eksekusi/Jalankan query dari variabel $query
                    $row = mysql_num_rows($sql);
                    if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        while($data = mysql_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            echo "<tr>";
                            echo "<td>".$data['nofakkeluar1810005']."</td>";
                            echo "<td>".$data['tglkeluar1810005']."</td>";
                            echo "<td>".$data['namaplg1810005']."</td>";
                            echo "<td>".$data['kdbrg1810005']."</td>";
                            $row = mysql_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
                            echo "<td>".$data['namabrg1810005']."</td>";
                            echo "<td>".$data['satuanbrg1810005']."</td>";
                            echo "<td>".$data['hargabrg1810005']."</td>";
                            echo "<td>".$data['detailkeluarqty1810005']."</td>";
                            echo "<td>".$data['subtotal']."</td>";
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
                            