<!-- DataTable -->
<link rel="stylesheet" type="text/css" href="data/assets/DataTables/media/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="data/assets/DataTables/media/css/dataTables.bootstrap.css">

<div class="col-lg-12 grid-margin stretch-card">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-plane icon-gradient bg-tempting-azure">
                </i>
            </div>
            <div>Data Pemasok
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
        <div class="app-main__inner">
            <div class="box-body">
                <?php
                    include("../koneksi.php");
                    $sql_view = mysql_query("SELECT * FROM pemasok1810005 ORDER BY kodepmsk1810005 ASC");
                    $total = mysql_num_rows($sql_view);
                ?>
                <a href="home.php?p=formtambahpemasok" class="btn btn-primary btn-lg col-md-2">
                    <span class="pe-7s-plus" aria-hidden="true"></span> TAMBAH DATA
                </a>
                <br><br>
                <div class="container">
                    <table id="datapemasok" name="datapemasok" class="table table-striped table-simple data">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Pemasok</th>
                            <th>Nama Pemasok</th>
                            <th>Alamat Pemasok</th>
                            <th>No. Telepon</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            while ($data = mysql_fetch_array($sql_view)) {
                            ?>
                            <tr>
                                <td><?php echo $nomor ?></td>
                                <td><?php echo $data['kodepmsk1810005'] ?></td>
                                <td><?php echo $data['namapmsk1810005'] ?></td>
                                <td><?php echo $data['alamatpmsk1810005'] ?></td>
                                <td><?php echo $data['notlppmsk1810005'] ?></td>
                                <td>
                                    <a href="home.php?p=formeditpemasok&kodepmsk=<?php echo $data['kodepmsk1810005'] ?>" 
                                    class="btn btn-info btn-sm"><span class="pe-7s-pen"
                                    aria-hidden="true"></span> Edit</a>
                                    <a href="home.php?p=proseshapuspemasok&kodepmsk=<?php echo $data['kodepmsk1810005'] ?>" 
                                    class="btn btn-danger btn-sm" onclick="pesan = confirm('Yakin data di hapus?');
                                    if (pesan) return true; else return false;" class="btn btn-danger btn-sm"><span class="pe-7s-trash"
                                    aria-hidden="true"></span> Hapus</a>
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
    <script type="text/javascript" src="data/assets/DataTables/media/js/jquerys.js"></script>
    <script type="text/javascript" src="data/assets/DataTables/media/js/jquerys.dataTables.js"></script>
    <script type="text/javascript">
	    $(document).ready(function(){
		    $('#datapemasok').DataTable();
	    });
    </script>