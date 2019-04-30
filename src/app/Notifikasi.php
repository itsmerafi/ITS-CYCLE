<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    //
    protected $table = 'notifikasis';
    protected $fillable = ['notifikasis_isi','notifikasis_waktu_kirim','notifikasis_status','petugas_id','mahasiswas_id'];
}
