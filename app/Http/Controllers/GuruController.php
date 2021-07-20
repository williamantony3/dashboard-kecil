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
        // $request->validate([
        //     'name' => 'required|max:255',
        //     'umur' => '',
        // ]);

        // Guru::create($request->all());

        // foreach ($request as $item) {
        //     DB::table('guru')->insert([
        //         'id' => ' ',
        //         'nama' => $item['nama'],
        //         'umur' => $item['umur']
        //     ]);
        // }

        $data = [
            // 'id'=>'',
            'nama'=>$request->nama,
            'umur'=>$request->umur
        ];

        DB::table('guru')->insert($data);
        return redirect()->route('guru.index')->with('success','Guru berhasil ditambahkan.');
    }

    public function update(){
        return view('guru.vUpdate');
    }

    public function delete(){
        return view('guru.vDelete');
    }
}
