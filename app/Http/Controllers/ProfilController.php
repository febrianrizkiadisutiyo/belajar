<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    // read data
    public function index(){
        $profil = Profil::all();
        return view('profil', compact('profil'));
    }

    //create data
    public function create()
    {
        return view('create_profil');
    }
    //save data
    public function store(Request $request)
    {
        Profil::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);
        return redirect('/profil')->with('success','Berhasil');
    }
}
