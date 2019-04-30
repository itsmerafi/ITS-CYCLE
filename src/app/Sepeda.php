<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sepeda extends Model
{
    //
    protected $table = 'sepedas';
    protected $fillable = ['sepedas_model','sepedas_tanggal_beli','sepedas_is_available','pos_id'];
}
