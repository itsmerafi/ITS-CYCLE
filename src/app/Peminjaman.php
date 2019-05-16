<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    //
    protected $table = 'pinjams';
    protected $fillable = ['pinjams_tanggal_meminjan','pinjams_tanggal_mengembalikan','pinjams_keterangan','pinjams_status','users_id','petugas_id','sepedas_id','pos_id'];
    public $timestamps = false;

    public function usermhs()
    {
        return $this->BelongsTo('App\User','users_id');
    }

    public function userpetugas()
    {
        return $this->BelongsTo('App\User','users_id');
    }

    public function pos()
    {
        return $this->BelongsTo('App\Pos','pos_id');
    }
}
