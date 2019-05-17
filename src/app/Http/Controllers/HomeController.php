<?php

namespace App\Http\Controllers;

use App\Peminjaman;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $statusPinjaman = DB::select(DB::raw("SELECT pinjams_status FROM `pinjams` WHERE users_id ='$user->users_nomor_id'"));
        $statusPinjaman = $statusPinjaman[0]->pinjams_status;
        if($statusPinjaman=='')
        {
            $statusPinjaman = 0;
        }
//        dd($statusPinjaman[0]->pinjams_status);
        return view('index',compact('statusPinjaman'));
    }
}
