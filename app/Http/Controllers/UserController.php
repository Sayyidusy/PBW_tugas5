<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('user.daftarPengguna');
    }

    public function create() {
        return view('user.registrasi');
    }

    public function store(Request $request) {
        $name = $request->name;

        return view('user.daftarPengguna');
    }

    public function show(User $user) {
        $name = $user->name;

        return view('user.infoPengguna', compact('user'));
    }
}

