<script>
    $(document).ready(function (e) {
    $('#databarang').DataTable();
    $('#datapemasok').DataTable();
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

<div class="col-lg-12 grid-margin stretch-card">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-plane icon-gradient bg-tempting-azure">
                </i>
            </div>
            <div>Edit Data Barang Masuk
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
            <form class="form-horizontal form-label-left input_mask" method="POST" role="form" action="home.php?p=prosessimpanbantu" name="brgmasuk">
                <div class="box-body">
                    <?php
                        include("../koneksi.php");
                        $n = $_GET['nofakmasuk'];
                        $edit = mysql_query("SELECT nofakmasuk1810005, tglmasuk1810005, masukkdpem1810005,
                        namapmsk1810005 from barangmasuk1810005 join pemasok1810005 on masukkdpem1810005=kodepmsk1810005 
                        where nofakmasuk1810005='$n'");
                        $data = mysql_fetch_array($edit);  
                    ?>
                    <div class="position-relative row form-group">
                        <label class="col-sm-2 col-form-label">No Faktur</label>
                        <div class="col-md-3">
                            <input type="text" name="nofak" class="form-control" value="<?php echo $data['nofakmasuk1810005']?>" readonly>
                        </div>
                        <label class="col-sm-2 col-form-label" align="right">Kode Pemasok</label>
                        <div class="col-sm-3">
                            <input type="text" id="kdpem" name="kdpem" class="form-control" value="<?php echo $data['masukkdpem1810005']?>" readonly>
                        </div>
                        <div class="col-sm-1">
                            <a class="btn btn-success btn-sm btnTambah" data-toggle="modal" data-target="#modalCariPemasok">
                            <i class="pe-7s-search"></i></a>
                        </div> 
                    </div>
                    <div class="position-relative row form-group">
                        <label class="col-sm-2 col-form-label">Tanggal Masuk</label>
                        <div class="col-sm-3">
                            <input type="date" name="tglmasuk" class="form-control" value="<?php echo $data['tglmasuk1810005']?>">
                        </div>
                        <label class="col-sm-2 col-form-label" align="right">Nama Pemasok</label>
                        <div class="col-sm-4">
                            <input type="text" id="namapem" name="namapem" class="form-control" value="<?php echo $data['namapmsk1810005']?>" readonly >
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
                        <button type="submit" class="btn btn-primary btnSimpan" name="ok" >
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
            $result = mysql_query("select detailkdbrg1810005,namabrg1810005,satuanbrg1810005,
            detailhrgbrg1810005,detailqty1810005,(detailhrgbrg1810005*detailqty1810005) as subtotal 
            from detailmasuk1810005 join barang1810005 on detailkdbrg1810005=kdbrg1810005
            where detailnofak1810005='$n'");
            $total = mysql_num_rows($result);
        ?>
        <div class="tampil"> 
            <div class="col-md-12">
                <div class="box box-info">
                    <!-- <div class="widget-content-wrapper"> -->
                    <div class="card-body">
                        <h5 class="card-title"> Data Barang Masuk</h5>
                    </div>   
                    <!-- </div>  -->
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
                                    <td><?php echo $row['detailkdbrg1810005'] ?></td>
                                    <td><?php echo $row['namabrg1810005'] ?></td>
                                    <td><?php echo $row['satuanbrg1810005'] ?><br />
                                    <td><?php echo $row['detailhrgbrg1810005'] ?></td>
                                    <td><?php echo $row['detailqty1810005'] ?>
                                    <td><?php echo $row['subtotal'] ?></td>
                                    <td>
                                        <a href="home.php?p=proseshapuseditbarangmasuk&kdbrg=<?php echo $row['detailkdbrg1810005'] ?>"
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
            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-lg btnSimpan" name="simpan" >
                <span class="pe-7s-diskette" aria-hidden="true"></span> SIMPAN</button>
                <a href="home.php?p=databarangmasuk" class="btn btn-danger btn-lg btn-close">
                <span class="pe-7s-close-circle" aria-hidden="true"></span> BATAL</a>
            </div>
            <br>
        </div>
    </div>
</div>