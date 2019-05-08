<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sepeda extends Model
{
    //
    protected $table = 'sepedas';
    protected $fillable = ['id','sepedas_model','sepedas_tanggal_beli','sepedas_is_available','pos_id'];

    public $incrementing = false;
    public $timestamps = false;



    public function pos()
    {
        return $this->BelongsTo('App\Pos','pos_id');
    }
}
