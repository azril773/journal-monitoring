<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Usermhs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Inertia\Response;

class Admin extends Controller
{
    //
    public function login(Request $req): Response {
        return Inertia::render('auth/loginadmin');
    }

    public function createusermhs(Request $req) {
        // Mahasiswa::create([
        //     "nim" => "12345",
        //     "nama" => "azril",
        //     "jurusan" => "TI"
        // ]);
        Usermhs::create([   
            "nim" => "12345",
            "email" => "azril@gmail.com",
            "password" => Hash::make("123")
        ]);
    }
}
