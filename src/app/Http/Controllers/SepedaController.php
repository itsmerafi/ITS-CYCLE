<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sepeda;
use App\Pos;

class SepedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Sepeda::orderBy('pos_id')->get();
        $pos = Pos::get();
        // print($data);
        // exit;

        return view('manage-cycle',compact('data','pos'));
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
        $sepeda = new Sepeda();
        $sepeda->id = 'SP'.$request->id;
        $sepeda->sepedas_model = $request->sepedas_model;
        $sepeda->sepedas_tanggal_beli = $request->sepedas_tanggal_beli;
        $sepeda->sepedas_is_available = $request->sepedas_is_available;
        $sepeda->pos_id = $request->pos_lokasi;
        $sepeda->save();

        return redirect()->route('sepeda.index');

        // $id = $request->all();
        // dd($id);
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
        // $data = $request->all();
        // dd($data);
        $data = Sepeda::find($id);

        $data->sepedas_is_available = $request->sepedas_is_available;
        $data->pos_id = $request->pos_lokasi;
        // $data->users_alamat = $request->users_alamat;
        // $data->users_departemen = $request->users_departemen;
        $data->save();

        return redirect()->route('sepeda.index');
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
}
