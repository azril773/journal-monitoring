<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Inertia\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class MainController extends Controller
{
    //
    public function coba(Request $req): Response
    {
        $users = User::where("id", $req->user()->id)->get();

        return Inertia::render("mahasiswa", [
            'breadcrumb' => '[{"title":"Mahasiswa","path":"/mahasiswa"}]',
            "user" => $users
        ]);
    }

    public function test(Request $req)
    {
        $req->session()->regenerate();
    }
}
