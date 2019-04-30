<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $table = 'mahasiswas';
    protected $fillable = ['mahasiswas_nama','mahasiswas_nrp','mahasiswas_alamat','mahasiswas_nomorhp','mahasiswas_departemen'];
}
