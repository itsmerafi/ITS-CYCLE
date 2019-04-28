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
                <h1>Manajemen Sepeda</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active"><a >Manajemen Sepeda</a></li>
         
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>
       
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Sepeda</h6>
            </div>
            <div class="card-body">
               <button type="button" class="btn-sm btn-primary" style="float: right; margin-bottom: 5px" align="right" data-toggle="modal" data-target="#addCycle"><i class="fas fa-plus-circle"></i></i> TAMBAH SEPEDA</button>
                


              <div class="table-responsive small">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="max-width: 10px; min-width: 10px">No</th>
                      <th style="max-width: 50px; min-width: 50px">ID SEPEDA</th>
                      <th style="max-width: 20px; min-width: 20px">POS</th>
                      <th style="max-width: 80px; min-width: 80px">Model</th>
                      <th style="max-width: 60px; min-width: 60px">Tanggal Beli</th>
                      <th style="max-width: 50px; min-width: 50px">Status</th>
                      <th style="max-width: 50px; min-width: 50px"></th>
                    </tr>
                  </thead>
                 
                  <tbody>
                  
                    <tr>
                      <td style="max-width: 10px; min-width: 10px">1</td>
                      <td style="max-width: 50px; min-width: 50px">SPD001</td>
                      <td style="max-width: 20px; min-width: 20px">1</td>
                      <td style="max-width: 80px; min-width: 80px">WIMCYCLE</td>
                      <td style="max-width: 60px; min-width: 60px">07-09-2017</td>
                      <td style="max-width: 50px; min-width: 50px">Baik</td>
                      <td style="max-width: 50px; min-width: 50px">
                         <button title="ubah" class="btn-sm btn-secondary" data-toggle="modal" data-target="#editCycle"><i class="fas fa-cog"></i></i></button>
                        <button class="btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal"> <i class="fas fa-trash"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td style="max-width: 10px; min-width: 10px">1</td>
                      <td style="max-width: 50px; min-width: 50px">SPD001</td>
                      <td style="max-width: 20px; min-width: 20px">1</td>
                      <td style="max-width: 80px; min-width: 80px">WIMCYCLE</td>
                      <td style="max-width: 60px; min-width: 60px">07-09-2017</td>
                      <td style="max-width: 50px; min-width: 50px">Baik</td>
                      <td style="max-width: 50px; min-width: 50px">
                         <button title="ubah" class="btn-sm btn-secondary" data-toggle="modal" data-target="#editCycle"><i class="fas fa-cog"></i></i></button>
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
    <div class="modal fade" id="addCycle" tabindex="-1" role="dialog"  aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Tambah User</h3>
              </div>
              <div class="modal-body" style="padding-left: 40px">
                   <form action="#" method="post" >     
                      <div class="row form-group">
                        <div class="col-3">
                          <label class=""><strong >Model</strong><span style="color: red">*</span></label>
                        </div>
                        <div class="col-8">
                          <input type="text" name="" class="form-control" placeholder="">
                        </div>
                      </div>
                       <div class="row form-group">
                        <div class="col-3">
                          <label class=""><strong >Tanggal</strong><span style="color: red">*</span></label>
                        </div>
                        <div class="col-8">
                          <input type="date" name="" class="form-control" placeholder="">
                        </div>
                      </div>
                      <div>
                      <div class="row form-group">
                        <div class="col-3">
                          <label class=""><strong >Ditempatkan pada Pos</strong><span style="color: red">*</span></label>
                        </div>
                        <div class="col-8">
                          <select class="form-control">
                            <option>1 - Pintu Utama</option>
                            <option>2 - Asrama</option>
                            <option>3 - Blot J</option>
                          </select>
                        </div>  
                      </div>
                      <div class="row form-group">
                        <div class="col-3">
                          <label class=""><strong >Status</strong><span style="color: red">*</span></label>
                        </div>
                        <div class="col-8">
                          <select class="form-control">
                            <option>Sangat Baik</option>
                            <option>Baik</option>
                            <option>Tidak Dapat Digunakan</option>
                          </select>
                        </div>  
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

            <div class="modal fade" id="editCycle" tabindex="-1" role="dialog"  aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3>Tambah User</h3>
              </div>
              <div class="modal-body" style="padding-left: 40px">
                   <form action="#" method="post" >     
                      
                      <div class="row form-group">
                        <div class="col-3">
                          <label class=""><strong >Ditempatkan pada Pos</strong><span style="color: red">*</span></label>
                        </div>
                        <div class="col-8">
                          <select class="form-control">
                            <option>1 - Pintu Utama</option>
                            <option>2 - Asrama</option>
                            <option>3 - Blot J</option>
                          </select>
                        </div>  
                      </div>
                      <div class="row form-group">
                        <div class="col-3">
                          <label class=""><strong >Status</strong><span style="color: red">*</span></label>
                        </div>
                        <div class="col-8">
                          <select class="form-control">
                            <option>Sangat Baik</option>
                            <option>Baik</option>
                            <option>Tidak Dapat Digunakan</option>
                          </select>
                        </div>  
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
