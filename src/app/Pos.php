<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pos extends Model
{
    //
    protected $table = 'pos';
    protected $fillable = ['pos_lokasi','pos_is_active','pos_jumlah_sepeda','petugas_id'];

    // protected $primaryKey = 'id';
    // public $incrementing = false;

    public function petugas()
    {
        return $this->BelongsTo('App\User','petugas_id');
    }

    public function sepeda()
    {
        return $this->hasMany('App\Sepeda');
    }

    public function pinjams()
    {
        return $this->hasMany('App\Peminjaman');
    }
}
