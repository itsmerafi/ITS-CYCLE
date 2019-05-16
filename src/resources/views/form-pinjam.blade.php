<!DOCTYPE html>
<html lang="en">

<head>
<style type="text/css"  >
body{
  background-image: linear-gradient(white, orange);
}
.main-section { 
  margin: 0 auto;
  margin-top: 80px;
  padding: 0;
}
.modal-content {
  background-color: #434e5a;
  padding: 0 18px;
  border-radius: 10px;
  border-width: 20px;
  float: right;
}

.form-group input{

}

.forgot {
  padding: 5px 0 25px;
}
.forgot a {
  color: blue;
  
}

img{
  height: 120px;
  width: 120px;

}

</style>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Form Pinjam</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" type="text/css">
  {{-- <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> --}}
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
  {{-- <link href="../css/sb-admin-2.min.css" rel="stylesheet"> --}}

</head>

<body>

  <div class="container">

    
    <!-- Outer Row -->
    <div class="modal-dialog text-center">
    <div class="col-sm-9 main-section">
      <div class="modal-content" style="border: 2px solid">

        <div class="row" >
          <div class="col-4" >

            <img src="{{asset('img/Home/stab1.png')}}">
          </div>
          <div class="col-8 " style="margin-top: 20px">

            <h4><strong>FORM PEMINJAMAN SEPEDA</strong></h4>
            
          </div>
        </div>
          <p> Informasi Sepeda </p>
          {{-- <form action="{{ url('/dashboard')}}"> --}}
          <form action="{{ route('peminjaman.store') }}" method="post">
            @csrf

            <div class="form-group">
              <label>ID Sepeda</label>
              <input type="text" class="form-control"  value="{{$id}}" readonly name="sepedas_id">
            </div>
            <div class="form-group">
              <label>MODEL Sepeda</label>
              <input type="text" class="form-control" value="{{$sepeda->sepedas_model}}" name="sepedas_model" readonly> 
            </div>
            <div class="form-group">
              <label>POS Peminjaman</label>
              <input type="text" class="form-control" value="{{$sepeda->pos->pos_lokasi}}" disabled>
              <input type="hidden" class="form-control" value="{{$sepeda->pos_id}}" name="pos_lokasi">
            </div>


            {{-- <button type="submit" class="btn btn-primary" style="margin-bottom: 20px">PINJAM</button> --}}
            <input type="submit" class="btn btn-success col-lg-4" value="Submit" style="margin-bottom: 20px" placeholder="PINJAM">
          </form>
          <a href="{{ route('index')}}">Kembali<<</a>
        </div>

      </div>
    </div>
  </div>


  </div>

  <!-- Bootstrap core JavaScript-->
  {{-- <link href="{{ asset('vendor/jquery/jquery.min.js') }}" rel="stylesheet"> --}}
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('js/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->

  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>
