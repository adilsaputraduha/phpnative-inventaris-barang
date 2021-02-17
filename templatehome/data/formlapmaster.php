<div class="col-lg-12 grid-margin stretch-card">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-plane icon-gradient bg-tempting-azure">
                </i>
            </div>
            <div>Laporan Data Master
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
                <div class="card-body"><h5 class="card-title">Laporan Data Pelanggan</h5>
                <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <form role="form" method="POST" action="data/lappelanggan.php" name="pelanggan" id="finput">
                                <div class="form-group">
                                    <label class="">Kode Pelanggan</label>
                                    <div class="form-group">
                                        <select id="kode1" name="kode1" class="custom-select">
                                            <?php
                                                include ('../koneksi.php');
                                                $sql_view = mysql_query("select * from pelanggan1810005 order by kodeplg1810005 asc");
                                                while ($data=mysql_fetch_array($sql_view)) {
                                            ?>
                                                <option value="<?=$data['kodeplg1810005']?>"><?=$data['kodeplg1810005']?>~<?=$data['namaplg1810005']?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="">Kode Pelanggan</label>
                                        <div class="form-group">
                                            <select id="kode2" name="kode2" class="custom-select">
                                                <?php
                                                    include ('../koneksi.php');
                                                    $sql_view = mysql_query("select * from pelanggan1810005 order by kodeplg1810005 asc");
                                                    while ($data=mysql_fetch_array($sql_view)) {
                                                ?>
                                                    <option value="<?=$data['kodeplg1810005']?>"><?=$data['kodeplg1810005']?>~<?=$data['namaplg1810005']?></option>
                                                <?php
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
                <div class="card-body"><h5 class="card-title">Laporan Data Pemasok</h5>
                <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <form role="form" method="POST" action="data/lappemasok.php" name="brgkeluar" id="finput">
                                <div class="form-group">
                                <label class="">Kode Pemasok</label>
                                    <div class="form-group">
                                        <select id="kode1" name="kode1" class="custom-select">
                                            <?php
                                                include ('../koneksi.php');
                                                $sql_view = mysql_query("select * from pemasok1810005 order by kodepmsk1810005 asc");
                                                while ($data=mysql_fetch_array($sql_view)) {
                                            ?>
                                                <option value="<?=$data['kodepmsk1810005']?>"><?=$data['kodepmsk1810005']?>~<?=$data['namapmsk1810005']?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="">Kode Pemasok</label>
                                        <div class="form-group">
                                            <select id="kode2" name="kode2" class="custom-select">
                                                <?php
                                                    include ('../koneksi.php');
                                                    $sql_view = mysql_query("select * from pemasok1810005 order by kodepmsk1810005 asc");
                                                    while ($data=mysql_fetch_array($sql_view)) {
                                                ?>
                                                    <option value="<?=$data['kodepmsk1810005']?>"><?=$data['kodepmsk1810005']?>~<?=$data['namapmsk1810005']?></option>
                                                <?php
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