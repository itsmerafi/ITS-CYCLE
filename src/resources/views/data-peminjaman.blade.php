<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ITS CYCLE</title>
  <meta name="description" content="">
  <meta name="author" content="">
  
  <!-- Custom fonts for this template -->
  <link href="{{asset('css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <!--?php require_once 'header.blade.php' ?> -->
  {{-- <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"> --}}

  <!--?php require_once 'header.blade.php' ?> -->

</head>
<!-- END HEAD -->

<!-- BODY -->
<body id="page-top">  <!-- Page Wrapper -->
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
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.index')}}">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
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
                    <h1>Data Peminjaman</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a >Data Peminjaman</a></li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive small">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="width:4%">No</th>
                      <th style="width:15%">Peminjam</th>
                      <th style="width:15%">Petugas Konfirmasi</th>
                      <th style="width:10%">Pos</th>
                      <th style="width:12%">Tanggal Pinjam</th>
                      <th style="width:12%">Tanggal Kembali</th>
                      <th style="width:12%">Keterangan</th>
                      <th style="width:12%">Status</th>
                      <th style="width:8%">Menu</th>
                    </tr>
                  </thead>  
                  <tbody>
                    <?php $x=1; ?>
                    @foreach($data as $key => $datas)
                      <tr>
                        <tr>
                        <td style="max-width: 15px; min-width: 15px"><?php echo $x; $x=$x+1; ?></td>
                        <td style="max-width: 80px; min-width: 80px">{{$datas->usermhs->users_nama}}</td>
                        <td style="max-width: 80px; min-width: 80px">
                          @if (is_null($datas->petugas_id))
                            Belum Tersedia
                          @else
                            {{$datas->userpetugas->users_nama}}
                          @endif
                          
                        </td>
                        <td style="max-width: 80px; min-width: 80px">{{$datas->pos->pos_lokasi}}</td>
                        <td style="max-width: 15px; min-width: 15px">{{$datas->pinjams_tanggal_meminjam}}</td>
                        <td style="max-width: 60px; min-width: 60px">
                          @if (is_null($datas->pinjams_tanggal_mengembalikan))
                            Belum Tersedia
                          @else
                            {{$datas->pinjams_tanggal_mengembalikan}}
                          @endif
                        </td>
                        <td style="max-width: 60px; min-width: 60px">
                          @if (is_null($datas->pinjams_keterangan))
                            Belum Tersedia
                          @else
                            {{$datas->pinjams_keterangan}}
                          @endif
                        </td>

                        </td>
                        <td style="max-width: 70px; min-width: 70px">
                          @if ($datas->pinjams_status==1)
                            Belum Dikonfirmasi
                            <button type="button" class="btn-sm btn-primary btn-icon-split" id="pinjam-item" data-item-id="{{$datas->id}}">
                            {{-- <button class="btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#confirmPinjam"> --}}
                              <span class="icon text-white-50">
                                <i class="fas fa-check-circle"></i>
                              </span>
                              <span class="text">Konfirmasi</span>
                            </button>
                          @elseif($datas->pinjams_status==2)
                            Belum Dikonfirmasi
                            <button class="btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#confirmKembali">
                              <span class="icon text-white-50">
                                <i class="fas fa-check-circle"></i>
                              </span>
                              <span class="text">Konfirmasi</span>
                            </button>
                          @else
                          Telah Dikembalikan
                          @endif
                          
                        <!-- macam-macam status:
                        Telah Dipinjam + Button Konfirmasi
                        Sedang dipinjam 
                        Telah Dikembaliikan + Button Konfirmasi
                        Telah Kembali -->
{{--                           <button class="btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#confirmKembali">
                            <span class="icon text-white-50">
                              <i class="fas fa-check-circle"></i>
                            </span>
                            <span class="text">Konfirmasi</span>
                          </button> --}}

                        </td>
                        <td style="max-width: 30px; min-width: 30px">
                          <button class="btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal"> 
                          <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">Hapus</span>
                          </button>
                        </td>
                      </tr>
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

        
        <!--?php require_once 'footer.php'  ?---> 
          <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="../#page-top">
        <i class="fas fa-angle-up"></i>
        </a>

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

        <!-- DELETE SCRIPT -->
        <script type="text/javascript">
          $(document).ready(function() {
          /**
           * for showing edit item popup
           */

          $(document).on('click', "#pinjam-item", function() {
            $(this).addClass('pinjam-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

            var options = {
              'backdrop': 'static'
            };
            $('#confirmPinjam').modal(options)
          })

          // on modal show
          $('#confirmPinjam').on('show.bs.modal', function() {
            var el = $(".pinjam-item-trigger-clicked"); // See how its usefull right here? 
            var row = el.closest(".data-row");

            // get the data
            var id = el.data('item-id');

            // fill the data in the input fields
            $("#users_id").val(id);

            $("#pinjam-form").attr("action","data-peminjaman/"+id);

          })

          // on modal hide
          $('#confirmPinjam').on('hide.bs.modal', function() {
            $('.pinjam-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
            $("#edit-form").trigger("reset");
          })
          })
        </script>
        <!-- END DELETE SCRIPT -->

      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->
  {{-- </div> --}}

    <!-- Custom scripts for all pages-->
</body>
<!-- END BODY -->

 <!-- MODAL HAPUS -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-exclamation-circle" style="color: red"> </i>Perhatian</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Apakah anda yakin menghapus data peminjaman ini?</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
      </div>
    </div>
  </div>
</div>
<!--END MODAL HAPUS -->

<!-- MODAL CONFIRM PINJAM -->
<div class="modal fade" id="confirmPinjam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form id="pinjam-form" method="post">
        {{-- <input name="_method" type="hidden" value="delete"> --}}
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        {{-- <input class="form-control hidden" type="text" name="id" value="{{ $user->id }}" disabled> --}}
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-check-circle" style="color: blue"></i></i>Konfirmasi Peminjaman</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah peminjam mengetahui peminjaman ini?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
          <button id="btn-delete" class="btn btn-danger" class="btn btn-danger" name="btnSubmit" >Ya</button>
          {{-- <a id="btn-delete" >Hapus</a> --}}
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
<!--END MODAL CONFIRM PINJAM -->

<!-- MODAL CONFIRM KEMBALI -->
<div class="modal fade" id="confirmKembali" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-check-circle" style="color: blue"></i>Konfirmasi Pengembalian</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Apakah sepeda telah anda terima di POS?</div>
      <div class="modal-footer">
        {{-- <form action="{{ route('data-peminjaman.update', $workorders->id)}}" method="POST">
          @csrf
          <input name="_method" type="hidden" value="PATCH">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
          <a id="btn-delete" class="btn btn-danger" href="#">Ya</a>

        </form> --}}
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
          <a id="btn-delete" class="btn btn-danger" href="#">Ya</a>
      </div>
    </div>
  </div>
</div>
<!-- END MODAL CONFIRM KEMBALI -->

</html>
