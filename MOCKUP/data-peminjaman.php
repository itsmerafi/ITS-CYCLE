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
                <h1>Data Peminjaman</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
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
                      <th style="max-width: 15px; min-width: 15px">No</th>
                      <th style="max-width: 85px; min-width: 85px">Peminjam</th>
                      <th style="max-width: 80px; min-width: 80px">Petugas Konfirmasi</th>
                      <th style="max-width: 15px; min-width: 15px">Pos</th>
                      <th style="max-width: 60px; min-width: 60px">Tanggal Pinjam</th>
                      <th style="max-width: 60px; min-width: 60px">Tanggal Kembali</th>
                      <th style="max-width: 70px; min-width: 70px">Keterangan</th>
                      <th style="max-width: 70px; min-width: 70px">Status</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                  
                    <tr>
                      <td style="max-width: 15px; min-width: 15px">1</td>
                      <td style="max-width: 80px; min-width: 80px">05111640000043</td>
                      <td style="max-width: 80px; min-width: 80px">Muhammad Arrafi</td>
                      <td style="max-width: 15px; min-width: 15px">1</td>
                      <td style="max-width: 60px; min-width: 60px">07.00 01-01-2019</td>
                      <td style="max-width: 60px; min-width: 60px">19.00 01-01-2019</td>
                      <td style="max-width: 70px; min-width: 70px">Ban Bocor</td>
                      <td style="max-width: 70px; min-width: 70px">
                      Telah Dikembalikan
                      <!-- macam-macam status:
                      Telah Dipinjam + Button Konfirmasi
                      Sedang dipinjam 
                      Telah Dikembaliikan + Button Konfirmasi
                      Telah Kembali -->
                        <a href="#" class="btn-xs btn-primary btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-check-circle"></i>
                          </span>
                          <span class="text">Konfirmasi</span>
                        </a>
                      </td>

                    </tr>
                                        <tr>
                      <td style="max-width: 15px; min-width: 15px">1</td>
                      <td style="max-width: 80px; min-width: 80px">05111640000043</td>
                      <td style="max-width: 80px; min-width: 80px">Muhammad Arrafi</td>
                      <td style="max-width: 15px; min-width: 15px">1</td>
                      <td style="max-width: 60px; min-width: 60px">07.00 01-01-2019</td>
                      <td style="max-width: 60px; min-width: 60px">19.00 01-01-2019</td>
                      <td style="max-width: 70px; min-width: 70px">Ban Bocor</td>
                      <td style="max-width: 70px; min-width: 70px">
                      Telah Kembali
                      </td>

                    </tr>
                  

                    <tr>
                      <td style="max-width: 15px; min-width: 15px">1</td>
                      <td style="max-width: 80px; min-width: 80px">05111640000043</td>
                      <td style="max-width: 80px; min-width: 80px">Muhammad Arrafi</td>
                      <td style="max-width: 15px; min-width: 15px">1</td>
                      <td style="max-width: 60px; min-width: 60px">07.00 01-01-2019</td>
                      <td style="max-width: 60px; min-width: 60px">19.00 01-01-2019</td>
                      <td style="max-width: 70px; min-width: 70px">Ban Bocor</td>
                      <td style="max-width: 70px; min-width: 70px">
                      Telah Dipinjam
                      <!-- macam-macam status:
                      Telah Dipinjam + Button Konfirmasi
                      Sedang dipinjam 
                      Telah Dikembaliikan + Button Konfirmasi
                      Telah Kembali -->
                        <a href="#" class="btn-xs btn-primary btn-icon-split">
                          <span class="icon text-white-50">
                            <i class="fas fa-check-circle"></i>
                          </span>
                          <span class="text">Konfirmasi</span>
                        </a>
                      </td>

                    </tr>

                    <tr>
                      <td style="max-width: 15px; min-width: 15px">1</td>
                      <td style="max-width: 80px; min-width: 80px">05111640000043</td>
                      <td style="max-width: 80px; min-width: 80px">Muhammad Arrafi</td>
                      <td style="max-width: 15px; min-width: 15px">1</td>
                      <td style="max-width: 60px; min-width: 60px">07.00 01-01-2019</td>
                      <td style="max-width: 60px; min-width: 60px">19.00 01-01-2019</td>
                      <td style="max-width: 70px; min-width: 70px">Ban Bocor</td>
                      <td style="max-width: 70px; min-width: 70px">
                      Sedang Dipinjam
                      </td>

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
              <div class="modal-body" style="padding-left: 40px">
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
