<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Peminjaman;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::where('users_nomor_id','=',Auth::id())->first();
        $pinjam = Peminjaman::where('users_id',$user->users_nomor_id)
                                ->orderBy('pinjams_tanggal_meminjam','desc')
                                ->first();
        // $statusPinjaman = DB::select(DB::raw("SELECT pinjams_status FROM `pinjams` WHERE users_id ='$user->users_nomor_id'"));
        // dd($pinjam);
        // $statusPinjaman = $statusPinjaman[0]->pinjams_status;
        // if($statusPinjaman=='')
        // {
        //     $statusPinjaman = 0;
        // }
//        dd($statusPinjaman[0]->pinjams_status);
        return view('index',compact('pinjam'));
    }
}
