<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = [
        'nama',
        'email',
        'password',
    ];
    protected $appends = ['name'];

    public function getNameAttribute()
    {
        return $this->nama;
    }
}
