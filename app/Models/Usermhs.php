<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Usermhs extends Authenticatable
{
    protected $table = 'usersmhs';
    protected $fillable = [
        'nim',
        'email',
        'password',
    ];
    protected $appends = ['name'];

    public function getNameAttribute()
    {
        $mhs = Mahasiswa::where('nim', $this->nim)->first();
        return $mhs->nama;
    }

}
