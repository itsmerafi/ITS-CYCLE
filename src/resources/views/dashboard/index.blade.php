<!DOCTYPE html>
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>ITS CYCLE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('fonts/stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Home/iconfont.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Home/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Home/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Home/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Home/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Home/plugins.css') }}" rel="stylesheet">

    <!--Theme custom css -->
    <link href="{{ asset('css/Home/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Theme Responsive css-->
    <link href="{{ asset('css/Home/responsive.css') }}" rel="stylesheet">


    <script src="{{asset('js/Home/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script> 

    
    <!--Theme custom css -->
    {{-- <link rel="stylesheet" href="../css/Home/style.css"  > --}}
    
    {{-- <link rel="stylesheet" href="../css/Home/responsive.css"  > --}}


    {{-- <script src="../js/Home/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script> --}}
    {{-- <script src="{{asset('js/Home/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script> --}}
    

</head>

<style type="text/css">
    .btn-sm {
        display: inline-block;
        line-height: 20px;
        text-align: center;
        color: #fff;
        letter-spacing: 1px;
        font-size:0.8125rem;
        margin: 10px;
        background-color: #ff7200;
        transition: .5s;
        border: 1px solid #ff7200;
        border-radius: 5px;
        font-family: 'montserratregular';

    }

    .btn-sm:hover{
        background-color: #ff5000;
    }

</style>

<body data-spy="scroll" data-target=".navbar-collapse">
<div class="culmn">
    <header id="main_menu" class="header navbar-fixed-top">
        <div class="main_menu_bg">
            <div class="container">
                <div class="row">
                    <div class="nave_menu">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#home">
                                        <img src="{{asset('img/Home/logo.png')}}">
                                    </a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->

                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul  class="nav navbar-nav pull-right" >
                                        <li><button class="btn-sm" style="margin-right: 35px" data-toggle="modal" data-target="#logout">Logout</button></li>
                                    </ul>
                                    <ul class="nav navbar-nav navbar-left" >
                                        <li><a href="#home">HOME</a></li>
                                        <li><a href="#service">TENTANG</a></li>
                                        <li><a href="#contact">DENAH</a></li>
                                        <li class="nav-item dropdown no-arrow mx-1" >
                                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-bell fa-fw"></i>
                                                <!-- Counter - Alerts -->
                                                <span class="badge badge-danger badge-counter">3+</span>
                                            </a>
                                            <!-- Dropdown - Alerts -->
                                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown" style="background: white">
                                                <h6 class="dropdown-list-header" style="text-align: center;">
                                                    Alerts Center
                                                </h6>
                                                <a class="dropdown-item d-flex align-items-center" href="#" >

                                                    <div style="padding: 10px">
                                                        <div class="small text-gray-500" style="font-size: 15px" ><strong>Judul</strong></div>
                                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header> <!--End of header -->

    <section id="home" class="home">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="main_home_slider text-center">
                            <div class="single_home_slider">
                                <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                    <h1>SELAMAT DATANG DI ITS CYCLE</h1>
                                    <p>Website peminjaman sepeda kampus di ITS</p>
                                    {{-- <button class="btn btn-alt-success mr-5 mb-5" data-toggle="modal" data-target="#peminjaman"><i class="fa fa-check mr-5"></i>Selesai</button> --}}
                                    <button data-toggle="modal" data-target="#peminjaman" class="home_btn btn btn-primary" {{-- onclick="window.location.href='{{url('form-pinjam') }}'" --}}>
                                        PINJAM SEKARANG
                                    </button>
                                    <{{-- button class="btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#peminjaman">
                        <span class="icon text-white-50">
                          <i class="fas fa-check-circle"></i>
                        </span>
                        <span class="text">Konfirmasi</span>
                      </button> --}}
                                    {{-- <li  class="nav-item active">
        <a class="nav-link " href="" data-toggle="modal" data-target="#logout">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
        </a>
      </li> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="service" class="service">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main_service_area">
                        <div class="main_service_content">
                            <div class="service_tabe">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="webdesign">
                                        <div class="single_service_tab">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="single_tab_content">
                                                        <div class="head_title">
                                                            <h3>Apa itu ITS Cycle ?</h3>
                                                            <div class="separator"></div>
                                                        </div>
                                                        <p>ITS Cycle adalah website yang membantu warga ITS khususnya mahasiswa dalam hal peminjaman sepeda kampus. Seperti yang kita ketahui, saat ini peminjaman sepeda kampus di ITS masih menggunakan sistem manual. ITS Cycle hadir agar memudahkan mahasiswa dalam kegiatan peminjaman sepeda kampus ini. Pengguna dapat mengetahui berapa jumlah sepeda yang tersedia pada setiap pos peminjaman dan tentunya pengguna dapat meiminjam sepeda secara online. </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="single_tab_img">
                                                        <img src="{{asset('img/Home/stab1.png')}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <section id="contact" class="contact">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="row">
                                                        <div class="contact_contant sections">
                                                            <div class="col-sm-6">
                                                                <div class="main_contact_info">
                                                                    <div class="head_title">
                                                                        <h3>DENAH</h3>
                                                                        <div class="separator"></div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="contact_info_content">
                                                                            <div class="col-sm-12">
                                                                                <div class="single_contact_info">
                                                                                    <div class="single_info_text">
                                                                                        <h3>POS 1</h3>
                                                                                        <p>Ketersedian Sepeda : none</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <div class="single_contact_info">
                                                                                    <div class="single_info_text">
                                                                                        <h3>POS 2</h3>
                                                                                        <p>Ketersedian Sepeda : none</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <div class="single_contact_info">
                                                                                    <div class="single_info_text">
                                                                                        <h3>POS 3</h3>
                                                                                        <p>Ketersedian Sepeda : none</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <img src="{{asset('img/Home/denah.jpg')}}">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>  <!-- End of contact section -->
                                    <div class="modal fade" id="peminjaman">
                                        <div class="modal-dialog modal-dialog-centered modal-sm">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">PEMINJAMAN</h4>
                                                </div>
                                                <!-- Modal body -->
                                                <form action="{{url('/form-pinjam')}}" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="modal-body" style="padding:1rem">
                                                       <label>ID SEPEDA</label>
                                                       <input class="form-control" type="text" name="id_sepeda">
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div>                  
                                                        <div class="row" align="center" >
                                                            <button type="button" data-dismiss="modal"  class="btn-sm" style="background-color: grey  ">BATAL</button>
                                                            <button type="submit" id="btn-reject" name="submit" style="" class="btn-sm">LANJUT</button>
                                                       </div>
                                                    </div> 
                                                </form>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="logout">
                                        <div class="modal-dialog modal-dialog-centered " >
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">LOGOUT</h4>
                                                    <!-- Modal body -->
                                                    <form action="{{url('/loginmhs')}}" method="get">
                                                        <div class="modal-body" style="padding:1rem">
                                                            <div>
                                                                <p style="font-size: 20px">Apakah anda yakin ingin keluar ?</p>
                                                            </div>
                                                            <!-- Modal footer -->
                                                        </div>
                                                        <div class="modal-footer"></div>
                                                        <div class="row" align="center" >
                                                            <button type="button" data-dismiss="modal"  class="btn-sm" style="background-color: grey  ">BATAL</button>
                                                            <button type="submit" id="btn-reject" name="submit" style="" class="btn-sm">Lanjut </button>
                                                        </div>
                                                    </form>
                                                </div>
                                                {{-- </form> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- START SCROLL TO TOP  -->
                                    <div class="scrollup">
                                        <a href="#"><i class="fa fa-chevron-up"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('js/Home/vendor/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('js/Home/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/Home/jquery.mixitup.min.js') }}"></script>
<script src="{{ asset('js/Home/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/Home/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('js/Home/jquery.masonry.min.js') }}"></script>
<script src="{{ asset('js/Home/jquery.fancybox.pack.js') }}"></script>

<script src="{{ asset('js/Home/plugins.js') }}"></script>
<script src="{{ asset('js/Home/main.js') }}"></script>
{{-- <script src="../js/Home/vendor/jquery-1.11.2.min.js" /> "></script> --}}
{{-- <script src="../js/Home/vendor/bootstrap.min.js" /> "></script> --}}
{{-- <script src="../js/Home/jquery.magnific-popup.js" /> "></script> --}}
{{-- <script src="../js/Home/jquery.mixitup.min.js" /> "></script> --}}
{{-- <script src="../js/Home/jquery.easing.1.3.js" /> "></script> --}}
{{-- <script src="../js/Home/jquery.masonry.min.js" /> "></script> --}}
{{-- <script src="../js/Home/jquery.fancybox.pack.js" /> "></script> --}}

{{-- <script src="../js/Home/plugins.js" /> "></script>
<script src="../js/Home/main.js" /> "></script> --}}
</body>
</html>