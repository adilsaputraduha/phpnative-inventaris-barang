<!-- css -->
<link rel="stylesheet" type="text/css" href="data/assets/DataTables/media/css/jquery.dataTables.css">
<!-- <link rel="stylesheet" type="text/css" href="data/assets/DataTables/media/css/dataTables.bootstrap.css"> -->

<div class="col-lg-12 grid-margin stretch-card">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-plane icon-gradient bg-tempting-azure">
                </i>
            </div>
            <div>Data Barang Masuk
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                <i class="fa fa-star"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-business-time fa-w-20"></i>
                    </span>
                    Buttons
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-inbox"></i>
                                <span>
                                    Inbox
                                </span>
                                <div class="ml-auto badge badge-pill badge-secondary">86</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-book"></i>
                                <span>
                                    Book
                                </span>
                                <div class="ml-auto badge badge-pill badge-danger">5</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-picture"></i>
                                <span>
                                    Picture
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a disabled href="javascript:void(0);" class="nav-link disabled">
                                <i class="nav-link-icon lnr-file-empty"></i>
                                <span>
                                    File Disabled
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>    
    </div>
    <br>
    <div class="card">  
        <!-- /.box-header -->
        <div class="app-main__inner">
            <div class="box-body">
                <?php
                    include '../koneksi.php';
                    $result = mysql_query("SELECT detailnofak1810005, tglmasuk1810005, namabrg1810005, satuanbrg1810005, detailhrgbrg1810005, 
                    detailqty1810005, (detailhrgbrg1810005 * detailqty1810005) AS subtotal 
                    FROM barang1810005 JOIN detailmasuk1810005 ON detailkdbrg1810005=kdbrg1810005 JOIN
                    barangmasuk1810005 ON detailnofak1810005=nofakmasuk1810005");
                    $total = mysql_num_rows($result);
                ?>
                <a href="home.php?p=formtambahbarangmasuk" class="btn btn-primary btn-lg col-md-2">
                    <span class="pe-7s-plus" aria-hidden="true"></span> TAMBAH DATA
                </a>
                <br><br>
                <div class="container">
                    <table id="databarangmasuk" name="databarangmasuk" class="table table-striped table-simple data">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NoFaktur</th>
                                <th>Tanggal Masuk</th>
                                <th>Nama Barang</th> 
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Sub Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $nomor = 1;
                                while ($row = mysql_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $nomor ?></td>
                                <td><?php echo $row['detailnofak1810005'] ?></td>
                                <td><?php echo $row['tglmasuk1810005'] ?></td>
                                <td><?php echo $row['namabrg1810005'] ?></td>
                                <td><?php echo $row['satuanbrg1810005'] ?></td>
                                <td>Rp.<?php echo number_format($row['detailhrgbrg1810005']) ?>,-</td>
                                <td><?php echo $row['detailqty1810005'] ?></td>
                                <td>Rp.<?php echo number_format($row['subtotal']) ?>,-</td>
                                <td>
                                <a href="home.php?p=formeditbarangmasuk&nofakmasuk=<?php echo $row['detailnofak1810005'] ?>"
                                class="btn btn-info btn-sm"><span class="pe-7s-pen"></span></a>
                                <a href="home.php?p=proseshapusbarangmasuk&nofakmasuk=<?php echo $row['detailnofak1810005'] ?>"
                                onclick="pesan = confirm('Yakin data di hapus?');
                                if (pesan) return true; else return false;" class="btn btn-danger btn-sm">
                                <span class="pe-7s-trash" aria-hidden="true"></span></a>
                                </td>
                            </tr>
                            <?php
                                $nomor++;
                                }
                            ?>
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>
        </div>
    </div> 
</div>

<!-- javascript -->
<script type="text/javascript" src="data/assets/DataTables/media/js/jquerys.js"></script>
<script type="text/javascript" src="data/assets/DataTables/media/js/jquerys.dataTables.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#databarangmasuk').DataTable();
	});
</script>