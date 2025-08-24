<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\User as ModelsUser;
use App\Models\Usermhs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Inertia\Response;

class User extends Controller
{
    public function login(Request $req): Response {
        return Inertia::render('auth/loginadmin');
    }

    public function loginProcess(Request $req) {
        $credentials = $req->validate([
            "email" => ['required', 'email'],
            "password" => ['required', 'string'],
        ]);

        if (Auth::guard('user')->attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function createusermhs(Request $req) {
        Mahasiswa::create([
            "nim" => "12345",
            "nama" => "azril",
            "jurusan" => "TI"
        ]);
        Usermhs::create([   
            "nim" => "12345",
            "email" => "azril@gmail.com",
            "password" => Hash::make("123")
        ]);
        ModelsUser::create([
            'name' => "azril",
            'email' => "azril@gmail.com",
            'password' => Hash::make("123"),
            "is_admin" => false,
        ]);
        // ModelsAdmin::create([
        //     "nama" => "Admin",
        //     "email" => "admin@gmail.com",
        //     "password" => Hash::make("123")
        // ]);

    }
}
