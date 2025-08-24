<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usermhs extends Model
{
    protected $table = 'usersmhs';
    protected $fillable = [
        'nim',
        'email',
        'password',
    ];
}
