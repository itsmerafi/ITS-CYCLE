<!DOCTYPE html>
<html lang="en">

<head>

<?php require_once 'header.php' ?>

</head>

<body id="page-top">  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php require_once 'navbar.php' ?>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800 small">Butuh Konfirmasi <kbd>3</kbd></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-database fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Manajemen Pengguna</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800 small">Jumlah Pengguna <kbd>50</kbd></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users-cog fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Manajemen Sepeda</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800 small">Jumlah Sepeda <kbd>50</kbd></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Notifikasi</div>
                     
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
                      <th style="max-width: 10px; min-width: 10px">POS</th>
                      <th style="max-width: 50px; min-width: 50px">STATUS</th>
                      <th style="max-width: 20px; min-width: 20px">PETUGAS</th>
                      <th style="max-width: 80px; min-width: 80px">SEPEDA TERSEDIA</th>
                     
                    </tr>
                  </thead>
                 
                  <tbody>
                  
                    <tr>
                      <td style="max-width: 10px; min-width: 10px">1 - Pintu Utama</td>
                      <td style="max-width: 50px; min-width: 50px">AKTIF</td>
                      <td style="max-width: 20px; min-width: 20px">Muhammad Arrafi</td>
                      <td style="max-width: 80px; min-width: 80px">10/25</td>
                      
                    </tr>
                     <tr>
                      <td style="max-width: 10px; min-width: 10px">2 - Asrama</td>
                      <td style="max-width: 50px; min-width: 50px">AKTIF</td>
                      <td style="max-width: 20px; min-width: 20px">Muhammad Arrafi</td>
                      <td style="max-width: 80px; min-width: 80px">0/25</td>
                      
                    </tr>
                     <tr>
                      <td style="max-width: 10px; min-width: 10px">3 - Pintu Keluar ITS Sakinah</td>
                      <td style="max-width: 50px; min-width: 50px">NON-AKTIF</td>
                      <td style="max-width: 20px; min-width: 20px">-</td>
                      <td style="max-width: 80px; min-width: 80px">15/25</td>
                      
                    </tr>
                    
                   
      
                   
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
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  </div>

  <!-- Bootstrap core JavaScript-->
  
</body>
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
                        
                        <button id="btnSubmit" type="submit" class="btn btn-primary btn-hero " name="btnSubmit" ><span class="fa fa-plus-circle" aria-hidden="true"></span>  KIRIM</button>
                        </div>

                    </form>
                  </div>
              </div>
             
            </div>
          </div>
        </div>

<footer>
  <?php require_once 'footer.php'  ?> 
</footer>
</html>
