<?php

namespace App\Http\Controllers;

use App\Sepeda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Peminjaman;
use Carbon\Carbon;

class DataPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Peminjaman::orderBy('pinjams_status')->get();
        // dd($data);

        return view('data-peminjaman',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data = Peminjaman::all();
        $user_id = Auth::id();
        $pinjams = Peminjaman::find($id);
        $kembali = Carbon::now();

        if($request->has('kembali')){
            
            $pinjams->pinjams_status = 0;
            $pinjams->petugas_id = $user_id;
            $pinjams->pinjams_tanggal_mengembalikan = $kembali;
            $pinjams->save();

            $updateKetersediaan =Sepeda::find($pinjams->sepedas_id);
            $updateKetersediaan->sepedas_is_available="Baik";
            $updateKetersediaan->save();

            return back()->with(compact('data'));
        }
        
        if($request->has('pinjam-form')){

            $pinjams->pinjams_status = 2;
            $pinjams->petugas_id = $user_id;
            $pinjams->save();

            return back()->with(compact('data'));
        }

        
        // dd($user_id);
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
        $data = Peminjaman::find($id);
        $data->delete();

        return redirect()->route('data-peminjaman.index');
    }
}
