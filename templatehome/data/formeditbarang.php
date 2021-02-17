<?php 
include("../koneksi.php");
?> 
<body>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-plane icon-gradient bg-tempting-azure">
                </i>
            </div>
            <div>Edit Data Barang
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
        <?php
            include("../koneksi.php");
            $n = $_GET['kdbrg'];
            $edit = "select * from barang1810005 where kdbrg1810005='$n'";
            $hasil = mysql_query($edit);
            $data = mysql_fetch_array($hasil);  
        ?>
        <!-- <div class="app-main__inner"> -->
            <div class="tab-content">
                <!-- <div class="main-card mb-3 card"> -->
                    <div class="card-body"><h5 class="card-title"><i>*Ubah data barang dengan lengkap</i></h5><br>
                        <form class="forms-sample" method="post" role="form" action="home.php?p=proseseditbarang">    
                            <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" > 
                                <div class="position-relative row form-group">
                                    <label class="col-sm-2 col-form-label"><h6>Kode Barang</h6></label>
                                    <div class="col-sm-5">
                                        <input type="text" name="kdbrg" class="form-control" placeholder="Kode barang" 
                                        autocomplete="off" required value="<?php echo $data['kdbrg1810005']?>">
                                    </div>
                                </div> 
                                <div class="position-relative row form-group">
                                    <label class="col-sm-2 col-form-label"><h6>Nama Barang</h6></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="namabrg" class="form-control" placeholder="Nama barang" 
                                        autocomplete="off" required value="<?php echo $data['namabrg1810005']?>">
                                    </div>
                                </div>
                                <div class="position-relative row form-group">
                                    <label class="col-sm-2 col-form-label"><h6>Satuan Barang</h6></label>
                                    <div class="col-sm-4">
                                        <input type="text" name="stuanbrg" class="form-control" placeholder="Satuan barang" 
                                        autocomplete="off" required value="<?php echo $data['satuanbrg1810005']?>">
                                    </div> 
                                </div> 
                                <div class="position-relative row form-group">
                                    <label class="col-sm-2 col-form-label"><h6>Harga Barang</h6></label>
                                    <div class="col-sm-6">
                                        <input type="text" name="hrgbrg" class="form-control" placeholder="Harga barang" 
                                        autocomplete="off" required value="<?php echo $data['hargabrg1810005']?>">
                                    </div> 
                                </div>
                                <div class="position-relative row form-group">
                                    <label class="col-sm-2 col-form-label"><h6>Stok Barang</h6></label>
                                    <div class="col-sm-2">
                                        <input type="text" name="stokbrg" class="form-control" placeholder="Stok barang" 
                                        autocomplete="off" required value="<?php echo $data['stokbrg1810005']?>">
                                    </div>
                                </div>
                            </table>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary btn-lg btnSimpan" name="simpan" >
                                <span class="pe-7s-diskette" aria-hidden="true"></span> UPDATE</button>
                                <a href="home.php?p=databarang" class="btn btn-danger btn-lg btn-close">
                                <span class="pe-7s-close-circle" aria-hidden="true"></span> BATAL</a>
                            </div>
                        </form>
                    </div> 
                <!-- </div> -->
            </div>
        <!-- </div>   -->
    </div>
</div>
</body>