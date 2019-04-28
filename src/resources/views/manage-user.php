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
                <h1>Manajemen Pengguna</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active"><a >Manajemen Pengguna</a></li>
         
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>
       
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
            </div>
            <div class="card-body">
               <button type="button" class="btn-sm btn-primary" style="float: right; margin-bottom: 5px" align="right" data-toggle="modal" data-target="#adduser"><i class="fas fa-user-plus"></i> TAMBAH USER</button>
                


              <div class="table-responsive small">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="max-width: 10px; min-width: 10px">No</th>
                      <th style="max-width: 50px; min-width: 50px">NRP</th>
                      <th style="max-width: 80px; min-width: 80px">Nama</th>
                      <th style="max-width: 80px; min-width: 80px">No. HP</th>
                      <th style="max-width: 200px ; min-width: 200px">Alamat Surabaya</th>
                      <th style="max-width: 70px; min-width: 70px">Departemen</th>
                      <th></th>
                    </tr>
                  </thead>
                 
                  <tbody>
                  
                    <tr>
                      <td>1</td>
                      <td>05111640000043</td>
                      <td>Muhammad Arrafi</td>
                      <td>087784606327</td>
                      <td>Keputih Gg 1 A</td>
                      <td>Informatika</td>
                      <td>

                         <button class="btn-sm btn-secondary" data-toggle="modal" data-target="#edituser"> <i class="fas fa-user-cog"></i></button>
                        <button class="btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal"> <i class="fas fa-trash"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>051116640000001</td>
                      <td>Colleen Hurst</td>
                      <td>082131231233</td>
                      <td>San Francisco</td>
                      <td>2009/09/15</td>
                      <td>
                        <button class="btn-sm btn-secondary" data-toggle="modal" data-target="#edituser"> <i class="fas fa-user-cog"></i></button>
                        <button class="btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal"> <i class="fas fa-trash"></i></button>
                        
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


          <div class="modal fade" id="edituser" tabindex="-1" role="dialog"  aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Ubah Data User</h3>
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

        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">HAPUS</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Apakah anda yakin menghapus catatan ini?</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
              <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
            </div>
          </div>
        </div>
      </div>
<footer>
  <?php require_once 'footer.php'  ?> 
</footer>
</html>
