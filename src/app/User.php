<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

// class User extends Model

class User extends Authenticatable
{
    const ADMIN_TYPE = 1;
    const DEFAULT_TYPE = 0;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_nama','users_nomor_id', 'users_nomorhp','users_alamat','users_departemen','isAdmin','password'
    ];


    protected $primaryKey = 'users_nomor_id';
    public $incrementing = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        // 'password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
//     protected $casts = [
//         'email_verified_at' => 'datetime',
//     ];

    public function Admin()    {        
        return $this->isAdmin === self::ADMIN_TYPE;    
    }

    public function pos()
    {
        return $this->hasOne('App\Pos');
    }
}

// class User extends Eloquent {

//     protected $primaryKey = 'users_nomor_id';

// }