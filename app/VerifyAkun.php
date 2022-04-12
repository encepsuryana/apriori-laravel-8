<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifyAkun extends Model
{
    protected $guarded = [];
 
    public function akun()
    {
        return $this->belongsTo('App\akun', 'akun_id');
    }
}
