<?php

namespace App\Http\Controllers;
use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index() {
        return view('koleksi.daftarKoleksi');
    }

    public function create() {
        return view('koleksi.registrasi');
    }

    public function store(Request $request) {
        $name = $request->name;

        return view('koleksi.daftarKoleksi');
    }

    public function show(Collection $koleksi) {
        $name = $koleksi->name;

        return view('koleksi.infoKoleksi', compact('koleksi'));
    }
}
