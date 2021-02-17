<div class="col-lg-12 grid-margin stretch-card">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-plane icon-gradient bg-tempting-azure">
                </i>
            </div>
            <div>Ganti Password
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
                <form class="form-horizontal form-label-left input_mask" action="home.php?p=changepassword" method="post">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-6">
                            <input type="text" name="user" class="form-control"
                            autocomplete="off" required value="<?php echo $_SESSION['username']; ?>" readonly>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Password Lama</label>
                        <div class="col-sm-6">
                            <input type="password" name="lama" class="form-control" placeholder="Password Lama" 
                            autocomplete="off" required>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Password Baru</label>
                        <div class="col-sm-6">
                            <input type="password" name="baru" class="form-control" placeholder="Password Baru" 
                            autocomplete="off" required>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Ulangi Password</label>
                        <div class="col-sm-6">
                            <input type="password" name="baruu" class="form-control" placeholder="Ulangi Password" 
                            autocomplete="off" required>
                        </div>
                    </div> 	
                    <div class="container">
                        <button type="submit" class="btn btn-primary btnSimpan" name="simpan" >
                        <span class="pe-7s-refresh-2" aria-hidden="true"></span> UPDATE</button>
                        <a href="home.php?p=awal" class="btn btn-danger btn-close">
                        <span class="pe-7s-close-circle" aria-hidden="true"></span> BATAL</a>
                    </div>
                    <br>														
                </form>
            </div>
        </div>
    </div>
</div>