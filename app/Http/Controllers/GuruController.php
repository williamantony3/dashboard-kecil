<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function index(){
        $guru = Guru::all();
        return view('guru.vRead', compact('guru'));
    }

    public function create(){
        return view('guru.vCreate');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|max:255',
            'umur' => 'required',
        ]);

        $data = [
            'nama'=>$request->nama,
            'umur'=>$request->umur
        ];

        DB::table('guru')->insert($data);
        return redirect()->route('guru.index')->with('success','Guru berhasil ditambahkan.');
    }

    public function edit(Guru $guru){
        // $guru = DB::table('guru')->where('id', $id_guru)->first();
        return view('guru.vUpdate', compact('guru'));
    }

    public function update(Request $request, Guru $guru){
        $request->validate([
            'nama' => 'required|max:255',
            'umur' => 'required',
        ]);

        $data = [
            'nama'=>$request->nama,
            'umur'=>$request->umur
        ];

        DB::table('guru')-> where('id', $guru->id)->update($data);
        return redirect()->route('guru.index')->with('success','Guru berhasil diubah.');
    }

    public function destroy($id_guru){
        DB::table('guru')->where('id', $id_guru)->delete();
        return redirect()->route('guru.index')->with('success','Guru berhasil dihapus.');
    }
}
