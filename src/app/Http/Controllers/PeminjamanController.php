<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Sepeda;
use App\Peminjaman;
use Illuminate\Support\Facades\Auth;

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
//        $request->id;
//        $query='SELECT sepedas_is_available FROM sepedas WHERE sepedas.id = ';
//        if(sepedas_is_available!='Baik'){
//                return redirect('/data-peminjaman')->with(errorMsg,"Sepeda sedang digunakkan");
//        }else {
            $user_id = Auth::id();
            $user = User::where('users_nomor_id','=',Auth::id())->get();
            dd($user);
            if($user->isAdmin ==1){
                Peminjaman::create($request->all());
                return redirect('/data-peminjaman');

            }else{
                return redirect('/data-peminjaman')->with(errorMsg,"anda kontol");
            }
//        }
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
