<div class="col-lg-12 grid-margin stretch-card">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-plane icon-gradient bg-tempting-azure">
                </i>
            </div>
            <div>Laporan Barang Keluar
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
    <div class="row">
        <div class="col-md-6">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">PER BULAN</h5>
                <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <form role="form" method="POST" action="data/lapbarangkeluar.php" name="brgkeluar" id="finput">
                                <div class="form-group">
                                    <label class="">Bulan</label>
                                    <div class="form-group">
                                        <select name="bulan" class="custom-select">
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="12">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="">Tahun</label>
                                        <div class="form-group">
                                            <select name="tahun" class="custom-select">
                                                <?php
                                                    $mulai= date('Y') - 50;
                                                    for($i = $mulai;$i<$mulai + 100;$i++){
                                                        $sel = $i == date('Y') ? ' selected="selected"' : '';
                                                        echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="cetak">
                                    <i class="metismenu-icon pe-7s-print"></i> CETAK</button>
                                    <a href="home.php" class="btn btn-danger">
                                    <i class="metismenu-icon pe-7s-close-circle"></i> BATAL</a></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">PER TAHUN</h5>
                <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <form role="form" method="POST" action="data/lapbarangkeluarpertahun.php" name="brgkeluar" id="finput">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="">Tahun</label>
                                        <div class="form-group">
                                            <select name="tahun1" class="custom-select">
                                                <?php
                                                    $mulai= date('Y') - 50;
                                                    for($i = $mulai;$i<$mulai + 100;$i++){
                                                        $sel = $i == date('Y') ? ' selected="selected"' : '';
                                                        echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="">Tahun</label>
                                        <div class="form-group">
                                            <select name="tahun2" class="custom-select">
                                                <?php
                                                    $mulai= date('Y') - 50;
                                                    for($i = $mulai;$i<$mulai + 100;$i++){
                                                        $sel = $i == date('Y') ? ' selected="selected"' : '';
                                                        echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary " name="cetak">
                                    <i class="metismenu-icon pe-7s-print"></i> CETAK</button>
                                    <a href="home.php" class="btn btn-danger">
                                    <i class="metismenu-icon pe-7s-close-circle"></i> BATAL</a></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>