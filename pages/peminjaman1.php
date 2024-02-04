<?php
    $sql = "SELECT max(id_peminjaman) as maxKode FROM peminjaman";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
    $id_peminjaman = $data['maxKode'];

    @$noUrut = (int) substr($id_peminjaman, 3, 3);
    $noUrut++;

    $char = "PMJ";
    $kodePeminjaman = $char . sprintf("%03s", $noUrut);
?>
<?php
    $sql = "SELECT max(id_peminjaman) as maxKode FROM peminjaman";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
    $id_peminjaman = $data['maxKode'];

    @$noUrut = (int) substr($id_peminjaman, 3, 3);
    $noUrut++;

    $char = "PMJ";
    $kodePeminjaman = $char . sprintf("%03s", $noUrut);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inventaris Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <style>
      body {
  /* min-height: 2000px; */
  padding-top: 0.5rem;
}

.input-group-append {
  margin-left: -1px;
}

.input-group-append,
.input-group-prepend {
  display: -ms-flexbox;
  display: flex;
}

.input-group {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: stretch;
  align-items: stretch;
  width: 100%;
}

.table-striped>tbody>tr:nth-of-type(odd) {
  background-color: #fff;
}

.mb-3,
.my-3 {
  margin-bottom: 1rem !important;
}

.mt-3,
.my-3 {
  margin-top: 1rem !important;
}

.file {
  visibility: hidden;
  position: absolute;
}

button,
input {
  overflow: visible;
}

.input-group>.form-control {
  position: relative;
  -ms-flex: 1 1 0%;
  flex: 1 1 0%;
  min-width: 0;
  margin-bottom: 0;
}

.btn-dark {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-dark:hover {
  color: #fff;
  background-color: black;
  border-color: black;

}

.themed-grid-col {
  padding-top: .75rem;
  padding-bottom: .75rem;
  background-color: rgba(112.520718, 44.062154, 249.437846, .15);
  border: 1px solid rgba(112.520718, 44.062154, 249.437846, .3);
}

.themed-container {
  padding: .75rem;
  margin-bottom: 1.5rem;
  background-color: rgba(112.520718, 44.062154, 249.437846, .15);
  border: 1px solid rgba(112.520718, 44.062154, 249.437846, .3);
}

.table-nobordered>tbody>tr>td,
.table-nobordered>tbody>tr>th {
  border: 0px solid #ddd;
  float: left;
}

.table-nobordered>tbody>tr>th {
  width: 30%;
}

.mainwrapper {
  background: #fefefe;
  display: flex;
  width: 100%;
  height: 650px;
  justify-content: center;
  align-items: center;
}

img.imgthumb {
  width: 150px;
  border-radius: 10px;
}

/* overlay by webprogramminunpas and modified by nelayankode.com*/
.overlay {
  width: 0;
  height: 0;
  overflow: hidden;
  position: fixed;
  top: 0;
  left: 0;
  background: rgba(0, 0, 0, 0);
  z-index: 9999;
  transition: .8s;
  text-align: center;
  padding: 50px 0;
}

.overlay:target {
  width: auto;
  height: auto;
  bottom: 0;
  right: 0;
  background: rgba(0, 0, 0, .7);
}

.overlay img {
  max-height: 100%;
  box-shadow: 2px 2px 7px rgba(0, 0, 0, .5);
}

.overlay:target img {
  animation: zoomDanFade 1s;
}

.overlay .close {
  /* position: absolute; */
  top: 2%;
  left: 2%;
  margin-left: -20px;
  color: white;
  text-decoration: none;
  line-height: 14px;
  padding: 5px;
  opacity: 0;
}

.overlay:target .close {
  animation: slideDownFade .5s .5s forwards;
}

/* animasi */
@keyframes zoomDanFade {
  0% {
    transform: scale(0);
    opacity: 0;
  }

  100% {
    transform: scale(1);
    opacity: 1;
  }
}

@keyframes slideDownFade {
  0% {
    opacity: 0;
    margin-top: -20px;
  }

  100% {
    opacity: 1;
    margin-top: 0;
  }
}
    </style>
  </head>
  <body>
    <!-- <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div> -->
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <!-- <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a> -->
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?= $user ?></p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <?php
                    if (!empty($user)) {
                    ?>
                <a class="dropdown-item" href="pages/keluar.php">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                  <?php
                  }
                  ?>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li> -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div> -->
            </li>
            <!-- <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi mdi-brightness-6"></i>
              </a>
            </li> -->
            <!-- <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi mdi-brightness-6"></i>
              </a>
            </li> -->
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!-- change to offline or busy as needed -->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?= $user ?></span>
                  <span class="text-secondary text-small">Account</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <?php
          if (@$level == "1") {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="?p=home">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=list_barang">
                <span class="menu-title">Daftar Inventaris</span>
                <i class="mdi mdi-library-books menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=peminjaman">
                <span class="menu-title">Peminjaman</span>
                <i class="mdi mdi-folder-move menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=pengembalian">
                <span class="menu-title">Pengembalian</span>
                <i class="mdi mdi-folder-upload menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=laporan">
                <span class="menu-title">Laporan</span>
                <i class="mdi  mdi-clipboard-check menu-icon"></i>
              </a>
            </li>
            <?php
          }
          ?>
          <?php
          if (@$level == "2") {
          ?>
          <li class="nav-item">
              <a class="nav-link" href="?p=home">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="?p=peminjaman">
                <span class="menu-title">Peminjaman</span>
                <i class="mdi mdi-folder-move menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=pengembalian">
                <span class="menu-title">Pengembalian</span>
                <i class="mdi mdi-folder-upload menu-icon"></i>
              </a>
            </li>
            <?php
          }
          ?>
          <?php
          if (@$level == "3") {
          ?>
          <li class="nav-item">
              <a class="nav-link" href="?p=home">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="?p=peminjaman1">
                <span class="menu-title">Peminjaman</span>
                <i class="mdi mdi-folder-move menu-icon"></i>
              </a>
            </li>
            <?php
          }
          ?>
            <!-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="pages/icons/mdi.html">
                <span class="menu-title">Icons</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="menu-title">Forms</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="menu-title">Charts</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Sample Pages</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li> -->
            <!-- <li class="nav-item sidebar-actions">
              <span class="nav-link">
                <div class="border-bottom">
                  <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                <div class="mt-4">
                  <div class="border-bottom">
                    <p class="text-secondary">Categories</p>
                  </div>
                  <ul class="gradient-bullet-list mt-4">
                    <li>Free</li>
                    <li>Pro</li>
                  </ul>
                </div>
              </span>
            </li> -->
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div style="background: #F8F8FF;
                      padding: 2.75rem 2.25rem;
                      width: 100%;
                      -webkit-box-flex: 1;
                      -ms-flex-positive: 1;
                      flex-grow: 1; }">
          <div class="col-lg-12">
          <div class="row">
    <center>
        <h2>Peminjaman Inventaris</h2>
    </center>
    <hr>
    <div class="col-lg-3">
        <div class="panel panel-primary">
            <div class="panel-heading">Peminjaman</div><br>
            <div class="panel-body">
                <form action="" method="post">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Kode Peminjaman</label>
                            <input type="text" class="form-control" name="id_peminjaman" value="<?= $kodePeminjaman ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Peminjam</label>
                            <select name="id_pegawai" id="" class="form-control">
                                <option value="">Nama Pegawai</option>
                                <?php
                                    $sql_pegawai = "SELECT * FROM pegawai";
                                    $q_pegawai = mysqli_query($koneksi, $sql_pegawai);
                                    while($pegawai = mysqli_fetch_array($q_pegawai)){
                                        ?>
                                        <option value="<?= $pegawai['id_pegawai']?>"><?= $pegawai['nama_pegawai']?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Pilih Barang</label>
                           <select name="id_inventaris" id="" class="form-control">
                                <option value="">Nama Barang</option>
                                <?php
                                    $sql_inventaris = "SELECT * FROM inventaris";
                                    $q_inventaris = mysqli_query($koneksi, $sql_inventaris);
                                    while($inventaris = mysqli_fetch_array($q_inventaris)){
                                        ?>
                                        <option value="<?= $inventaris['id_inventaris']?>"><?= $inventaris['nama']?></option>
                                        <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-md btn-primary" name="simpan">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php
                if(isset($_POST['simpan'])){
                    $id_peminjaman = $_POST['id_peminjaman'];
                    $id_pegawai = $_POST['id_pegawai'];
                    $id_inventaris = $_POST['id_inventaris'];
                    $jumlah = $_POST['jumlah'];

                    $sql_peminjaman = "INSERT INTO peminjaman SET
                    id_peminjaman = '$id_peminjaman',
                    id_pegawai = '$id_pegawai',
                    status_peminjaman ='0'";

                    $query_input = mysqli_query($koneksi, $sql_peminjaman);
                    if($query_input){
                        $detail_pinjam = "INSERT INTO detail_pinjam SET jumlah ='$jumlah', id_inventaris ='$id_inventaris', id_peminjaman = '$id_peminjaman'";

                        $q_detail_pinjam = mysqli_query($koneksi, $detail_pinjam);
                        if($q_detail_pinjam){
                            ?>
                                <script type="text/javascript">
                                    window.location.href="?p=peminjaman1"
                                </script>
                            <?php
                        }else{
                            echo "gagal";
                        }
                    }else{
                        echo "Gagal menyimpan";
                    }
                }
            ?>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="panel panel-primary">
            <div class="panel-heading">Daftar Barang Dipinjam</div><br>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Pinjam</th>
                            <th>Tgl.Pinjam</th>
                            <th>Nama Peminjam</th>
                            <th>Nama Barang</th>
                            <th>Jml</th>
                            <th>Tgl.Kembali</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $hari = date('d-m-Y');
                            $d_peminjaman = "SELECT *, detail_pinjam.jumlah as jml FROM detail_pinjam left join peminjaman on peminjaman.id_peminjaman = detail_pinjam.id_peminjaman left join inventaris on inventaris.id_inventaris = detail_pinjam.id_inventaris left join pegawai on pegawai.id_pegawai = peminjaman.id_pegawai";
                            $d_query = mysqli_query($koneksi, $d_peminjaman);
                            $cek = mysqli_num_rows($d_query);

                            if($cek > 0){
                                $no = 1;
                                while($data_d = mysqli_fetch_array($d_query)){
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data_d['id_peminjaman']?></td>
                                            <td><?= $data_d['tanggal_pinjam'] ?></td>
                                            <td><?= $data_d['nama_pegawai']?></td>
                                            <td><?= $data_d['nama']?></td>
                                            <td><?= $data_d['jml']?></td>
                                            <td><?= $data_d['tanggal_kembali']?></td>
                                            <td>
                                                <?php
                                                    if($data_d['status_peminjaman'] == '0'){
                                                        echo "<label class='label label-danger'>Konfirmasi</label>";
                                                    }else if($data_d['status_peminjaman'] == '1'){
                                                        echo "<label class='label label-warning'>Dipinjam</label>";
                                                    }else{
                                                        echo "<label class='label label-success'>Dikembalikan</label>";
                                                    }
                                                ?>
                                            </td>
                                            
                                        </tr>
                                    <?php
                                }
                            }
                        ?>
                        <!-- <tr>
                            <td>1</td>
                            <td>PJM001</td>
                            <td>10-11-2021</td>
                            <td>Andika</td>
                            <td>Laptop</td>
                            <td>10</td>
                            <td>00-00-0000</td>
                            <td>
                                <label for="" class="label label-danger">Belum</label>
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Proses</a>
                            </td>
                        </tr>
                         -->

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<footer class="">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Huriyatul Firdausil Mumtiroh</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> App Inventaris Kantor</span>
            </div>
          </footer>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>