<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    protected $table = 'akun';
    protected $guarded = [];

    public function verifyAkun()
    {
        return $this->hasOne('App\VerifyAkun');
    }
}

