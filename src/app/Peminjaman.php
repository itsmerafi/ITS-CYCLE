<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    //
    protected $table = 'pinjams';
    protected $fillable = ['peminjaman_tanggal_meminjan','peminjaman_tanggal_mengembalikan','peminjaman_keterangan','peminjaman_status','mahasiswas_id','petugas_id','sepedas_id','pos_id'];
    public $timestamps = false;
}
