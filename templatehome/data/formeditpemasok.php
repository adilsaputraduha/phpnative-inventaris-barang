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
            <div>Edit Data Pemasok
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
            $n = $_GET['kodepmsk'];
            $edit = "select * from pemasok1810005 where kodepmsk1810005='$n'";
            $hasil = mysql_query($edit);
            $data = mysql_fetch_array($hasil);  
        ?>
        <!-- <div class="app-main__inner"> -->
            <div class="tab-content">
                <!-- <div class="main-card mb-3 card"> -->
                    <div class="card-body"><h5 class="card-title"><i>*Ubah data pemasok dengan lengkap</i></h5><br>
                        <form class="forms-sample" method="post" role="form" action="home.php?p=proseseditpemasok">    
                            <table id="datamodaljenis" class="table table-striped responsive-utilities jambo_table" > 
                                <div class="position-relative row form-group">
                                    <label class="col-sm-2 col-form-label"><h6>Kode Pemasok</h6></label>
                                    <div class="col-sm-5">
                                        <input type="text" name="kodepmsk" class="form-control" placeholder="Kode pemasok" 
                                        autocomplete="off" required value="<?php echo $data['kodepmsk1810005']?>">
                                    </div>
                                </div> 
                                <div class="position-relative row form-group">
                                    <label class="col-sm-2 col-form-label"><h6>Nama Pemasok</h6></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="namapmsk" class="form-control" placeholder="Nama pemasok" 
                                        autocomplete="off" required value="<?php echo $data['namapmsk1810005']?>">
                                    </div>
                                </div>
                                <div class="position-relative row form-group">
                                    <label class="col-sm-2 col-form-label"><h6>Alamat Pemasok</h6></label>
                                    <div class="col-sm-4">
                                        <input type="text" name="alamatpmsk" class="form-control" placeholder="Alamat pemasok" 
                                        autocomplete="off" required value="<?php echo $data['alamatpmsk1810005']?>">
                                    </div> 
                                </div> 
                                <div class="position-relative row form-group">
                                    <label class="col-sm-2 col-form-label"><h6>Nomor Telepon</h6></label>
                                    <div class="col-sm-6">
                                        <input type="text" name="notelppmsk" class="form-control" placeholder="Nomor Telepon" 
                                        autocomplete="off" required value="<?php echo $data['notlppmsk1810005']?>">
                                    </div> 
                                </div>
                            </table>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary btn-lg btnSimpan" name="simpan" >
                                <span class="pe-7s-diskette" aria-hidden="true"></span> UPDATE</button>
                                <a href="home.php?p=datapemasok" class="btn btn-danger btn-lg btn-close">
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