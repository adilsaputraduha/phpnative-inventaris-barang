<script>
    $(document).ready(function (e) {
    $('#databarang').DataTable();
    $('#datapelanggan').DataTable();
    })
</script>

<script>
    function hitung() {
        var harga = document.getElementById('hrgbrg').value;
        var jumlah = document.getElementById('jml').value;
        var result = parseFloat(harga) * parseFloat(jumlah);
        if (!isNaN(result)) {
        document.getElementById('subtot').value = result;
        }
}
</script>

<?php
    include "../koneksi.php";
    $today = date("Ymd");
    $query1 = "SELECT max(nofakkeluar1810005) as maxID FROM barangkeluar1810005 WHERE nofakkeluar1810005 LIKE '$today%'";
    $hasil = mysql_query($query1);
    $data = mysql_fetch_array($hasil);
    $idMax = $data['maxID'];
    $NoUrut = (int) substr($idMax, 8, 4);
    $NoUrut++;
    $NewID = $today .sprintf('%04s', $NoUrut);
?>
    
<div class="col-lg-12 grid-margin stretch-card">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-plane icon-gradient bg-tempting-azure">
                </i>
            </div>
            <div>Input Data Barang Keluar
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
            <form class="form-horizontal form-label-left input_mask" method="POST" role="form" action="home.php?p=prosessimpanbantu" name="brgkeluar">
                <div class="box-body"> 
                    <div class="position-relative row form-group">
                        <label class="col-sm-2 col-form-label">No Faktur</label>
                        <div class="col-md-3">
                            <input type="text" name="nofak" class="form-control" value="<?php echo $NewID; ?>" readonly>
                        </div>
                        <label class="col-sm-2 col-form-label" align="right">Kode Pelanggan</label>
                        <div class="col-sm-3">
                            <input type="text" id="kdpel" name="kdpel" class="form-control" readonly>
                        </div>
                        <div class="col-sm-1">
                            <a class="btn btn-success btn-sm btnTambah" data-toggle="modal" data-target="#modalCariPelanggan">
                            <i class="pe-7s-search"></i></a>
                        </div> 
                    </div>
                    <div class="position-relative row form-group">
                        <label class="col-sm-2 col-form-label">Tanggal Keluar</label>
                        <div class="col-sm-3">
                            <input type="date" name="tglkeluar" class="form-control">
                        </div>
                        <label class="col-sm-2 col-form-label" align="right">Nama Pelanggan</label>
                        <div class="col-sm-4">
                            <input type="text" id="namapel" name="namapel" class="form-control" readonly >
                        </div>
                    </div>
                    <hr>
                    <div class="position-relative row form-group">
                        <label class="col-sm-2 col-form-label">Kode Barang</label>
                        <div class="col-sm-2">
                            <input type="text" id="kdbrg" name="kdbrg" class="form-control" readonly >
                        </div>
                        <div class="col-sm-1">
                            <a class="btn btn-success btn-sm btnTambah" data-toggle="modal" data-target="#modalCaribarang">
                            <i class="pe-7s-search"></i></a>
                        </div>               
                        <label class="col-sm-2 col-form-label" align="right">Harga Barang</label>
                        <div class="col-sm-2">
                            <input type="text" id="hrgbrg" name="hrgbrg" class="form-control" readonly >
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-3">
                            <input type="text" id="namabrg" name="namabrg" class="form-control" readonly >
                        </div>
                        <label class="col-sm-2 col-form-label" align="right">Jumlah</label>
                        <div class="col-sm-1">
                            <input type="text" id="jml" name="jml" class="form-control" autocomplete="off" onkeyup="hitung();">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label class="col-sm-2 col-form-label">Satuan</label>
                        <div class="col-sm-2">
                            <input type="text" id="satuan" name="satuan" class="form-control" readonly>
                        </div>
                        <label class="col-sm-3 col-form-label" align="right">Sub Total</label>
                        <div class="col-sm-2">
                            <input type="text" id="subtot" name="subtot" class="form-control" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary btnSimpan" name="okkeluar" >
                            <span class="glyphicon glyphicon-floppy-saved"></span> Oke
                        </button>
                    </div>
                    <hr>
                </div>
                <div class="box-footer">
                </div>
        </div>

        <?php
            include '../koneksi.php';
            $result = mysql_query("select idbrg1810005,namabrg1810005,satuanbrg1810005,hrg1810005,qty1810005,(hrg1810005*qty1810005)as subtotal from bantu1810005 join barang1810005 on idbrg1810005=kdbrg1810005 ");
            $total = mysql_num_rows($result);
        ?>
        <div class="tampil"> 
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="card-body">
                        <h5 class="card-title"> Data Barang Keluar</h5>
                    </div>  
                    <div class="box-body">
                        <table id="datajadwal" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Barang</th>
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
                                    <td><?php echo $row['idbrg1810005'] ?></td>
                                    <td><?php echo $row['namabrg1810005'] ?></td>
                                    <td><?php echo $row['satuanbrg1810005'] ?><br />
                                    <td><?php echo $row['hrg1810005'] ?></td>
                                    <td><?php echo $row['qty1810005'] ?>
                                    <td><?php echo $row['subtotal'] ?></td>
                                    <td>
                                        <a href="home.php?p=hapustemkeluar&kdbrg=<?php echo $row['idbrg1810005'] ?>"
                                        onclick="pesan = confirm('Yakin data di hapus?'); 
                                        if (pesan) return true; else return false;" class="btn btn-danger btn- sm">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> 
                                    </td>
                                </tr>
                                <?php
                                    $nomor++;
                                    } 
                                ?>
                            </tbody>
                        </table>
                    </div> 
                </div>
            </div>
            <div class="container">
                <button type="submit" class="btn btn-primary btn-lg btnSimpan mr-2" name="simpankeluar" >
                <span class="pe-7s-diskette" aria-hidden="true"></span> SIMPAN</button>
                <a href="home.php?p=databarangkeluar" class="btn btn-danger btn-lg btn-close">
                <span class="pe-7s-close-circle" aria-hidden="true"></span> BATAL</a>
            </div>
            <br>
        </div>
    </div>
</div>