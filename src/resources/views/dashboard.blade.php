<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ITS CYCLE</title>

  <!-- Custom fonts for this template -->
  <link href="{{asset('css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<!--?php require_once 'header.blade.php' ?> -->
</head>
<!-- END HEAD -->

<!-- BODY -->
<body id="page-top">  
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <!-- ?php require_once 'navbar.php' ?> -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="{{asset('img/Home/stab1.png')}}" style="height: 70px; width: 70px">
        </div>
        <div class="sidebar-brand-text mx-3" >PETUGAS <sup>ITS-CYCLE</sup></div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.index')}}">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('data-peminjaman.index')}}">
          <i class="fas fa-database"></i>
          <span>Data Peminjaman </span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Tables -->
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('data-user.index')}}">
          <i class="fas fa-users-cog"></i>
          <span>Manajemen Pengguna</span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('sepeda.index')}}">
          <i class="fas fa-bicycle"></i>
          <span>Manajemen Sepeda</span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item ">
        <a class="nav-link" href="{{ route('notifikasi.index')}}">
          <i class="fas fa-bell"></i>
          <span>Notifikasi</span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
      <li  class="nav-item">
        <a class="nav-link " href="" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>Logout</span>
        </a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" style="padding-top: 30px">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar --> 
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"><a >Dashboard</a></li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>

          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Peminjaman</div>
                      <a href="{{ url('/data-peminjaman')}}">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 small">Butuh Konfirmasi <kbd>{{$konfirmasi}}</kbd></div>
                      </a>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-database fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
            {{-- </div> --}}
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Manajemen Pengguna</div>
                      <a href="{{ url('/manage-user')}}">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 small">Jumlah Pengguna <kbd>{{$usercount}}</kbd></div>
                      </a>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-users-cog fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
              {{-- </div> --}}

              <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Manajemen Sepeda</div>
                      <a href="{{ url('/data-cycle')}}">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 small">Jumlah Sepeda <kbd>{{$sepedacount}}</kbd></div>
                      </a>
                    </div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
            {{-- </div> --}}

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <a href="{{ url('/notifikasi')}}">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Notifikasi</div>
                      </a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

            <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data </h6>
            </div>
            <div class="card-body">            

              <div class="table-responsive small">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="width:10%">NO</th>
                      <th style="width:25%">POS</th>
                      <th style="width:10%">STATUS</th>
                      <th style="width:15%">PETUGAS</th>
                      <th style="width:20%">SEPEDA TERSEDIA</th>       
                    </tr>
                  </thead>

                  <tbody>
                    <?php $x=1; ?>
                    @foreach($data as $key => $datas)
                    <tr>
                      <td style="width:10%"><?php echo $x; $x=$x+1; ?></td>
                      <td style="width:25%">{{$datas->pos_lokasi}}</td>
                      <td style="width:10%">{{$datas->pos_is_active}}</td>
                      <td style="width:15%">{{$datas->petugas->users_nama}}</td>
                      <td style="width:20%">{{$datas->pos_jumlah_sepeda}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; ITS CYCLE 2019</span>
          </div>
        </div>

        <a class="scroll-to-top rounded" href="../#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- MODAL LOGOUT-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">BATAL</button>
                  <button type="submit" id="btn-reject" name="submit" style="" class="btn btn-primary">Lanjut </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--END MODAL LOGOUT-->
        {{-- <script src="../vendor/jquery/jquery.min.js"></script> --}}
        {{-- <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

        <!-- Page level plugins -->
        <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
      </footer>
        <!-- End of Footer -->

    </div>
      <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Bootstrap core JavaScript-->
  
</body>
<!-- END BODY -->


<!-- MODAL -->

<!-- MODAL ADD USER-->
<div class="modal fade" id="adduser" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Tambah User</h3>
      </div>
      <div class="modal-body" style="padding-left: 0px">
        <form action="#" method="post" >     
          <div class="row form-group">
            <div class="col-3">
              <label class=""><strong >NRP</strong><span style="color: red">*</span></label>
            </div>
            <div class="col-8">
              <input type="text" name="" class="form-control" placeholder="Contoh : 0511164000xxxx">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-3">
              <label class=""><strong >NAMA</strong><span style="color: red">*</span></label>
            </div>
            <div class="col-8">
              <input type="text" name="" class="form-control" placeholder="Nama Pengguna">
            </div>  
          </div>      
          <div class="row form-group">
            <div class="col-3">
              <label class=""><strong >No. HP</strong><span style="color: red">*</span></label>
            </div>
            <div class="col-8">
              <input type="text" name="" class="form-control" placeholder="Contoh : 0877xxxxxxxx">
            </div>
          </div> 
          <div class="row form-group">
            <div class="col-3">
              <label class=""><strong >Alamat Surabaya</strong><span style="color: red">*</span></label>
            </div>
            <div class="col-8">
              <input type="text" name="" class="form-control">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-3">
              <label class=""><strong >Departemen</strong><span style="color: red">*</span></label>
            </div>
            <div class="col-8">
              <select class="form-control">
              <option selected disabled >Choose..</option>
              <option>Informatika</option>
              <option>Sistem Informasi</option>
              <option>Fisika</option>
              </select>                          
            </div>
          </div>                     
          <div style="text-align: right; margin:10px ; margin-right: 40px">   
            <button id="btnSubmit" type="submit" class="btn btn-primary btn-hero " name="btnSubmit" >
              <span class="fa fa-plus-circle" aria-hidden="true"></span>  
              KIRIM
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- END MODAL ADD USER-->

</html>
