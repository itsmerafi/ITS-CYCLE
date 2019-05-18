<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Sepeda;
use App\Peminjaman;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('data-peminjaman');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('form-pinjam');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $query=Sepeda::find($request->sepedas_id);
        // dd($query);
        // $query = $query->sepedas_is_available;
        if($query->sepedas_is_available!='Baik'){
            // return redirect('/')->with('error', 'Sepeda tidak tersedia');
            // dd($query);
        }
        else {
            $user = User::where('users_nomor_id','=',Auth::id())->first();
//            dd($user);
            if($user->isAdmin == 0){
                $user_id = Auth::id();
                $pinjam = Carbon::now();
                $pinjams = new Peminjaman();
                $pinjams->users_id = $user_id;
                $pinjams->sepedas_id = $request->sepedas_id;
                $pinjams->pos_id = $request->pos_lokasi;
                $pinjams->pinjams_tanggal_meminjam = $pinjam;
                // $pinjams->pinjams_tanggal_mengembalikan = $file->work_orders_id;
                // $pinjams->pinjams_keteragan = $file->work_orders_id;
                $pinjams->pinjams_status = 1;
                $pinjams->save();
                return redirect('/')->with('success', 'Berhasil Meminjam sepeda');  ;
            }
            else{
                // dd($query);
                return redirect('/')->with('error', 'Hubungi SKK untuk peminjaman sepeda');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // return view('data-peminjaman');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($id);
        $pinjams = Peminjaman::find($id);
        $pinjams->pinjams_status = 3;
        $pinjams->save();

        // return back()->with(compact('data'));
        return redirect('/')->with('success', 'Hubungi SKK untuk peminjaman sepeda');
        // dd($pinjams);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function form(Request $request){
        $id = 'SP'.$request->id;

        // $sepeda = Sepeda::where('id',$id)->firstOrFail();
        $sepeda = Sepeda::where('id',$id)->first();

        // dd($sepeda);
        // $data['id']=$id;
        return view('form-pinjam',compact('id','sepeda'));
    }
}
