<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    //
    protected $table = 'petugas';
    protected $fillable = ['petugas_nama','petugas_alamat','petugas_nomorhp'];
}
