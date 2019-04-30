<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pos extends Model
{
    //
    protected $table = 'pos';
    protected $fillable = ['pos_lokasi','pos_is_active','pos_jumlah_sepeda','petugas_id'];
}
