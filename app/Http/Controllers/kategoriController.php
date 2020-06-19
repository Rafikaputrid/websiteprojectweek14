<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kategoriController extends Controller
{
    public function index()
    {
        $kategori = DB::table('kategori')->get();
        return view('kategori/index', ['kategori' => $kategori]);
    }

    public function tambah()
    {
        return view('kategori/tambah');
    }

    public function store(Request $request)
    {
        DB::table('kategori')->insert([
            'NAMA_KATEGORI' => $request->kategori
        ]);
        return redirect('/kategori');
    }

    public function edit($id)
    {
        $kategori=DB::table('kategori')->where('ID_KATEGORI', $id)->get();
        return view('kategori/edit',['kategori'=>$kategori]);
    }

    public function update(Request $request)
    {
        DB::table('kategori')->where('ID_KATEGORI', $request->id)->update([
            'NAMA_KATEGORI' => $request->kategori
        ]);
        return redirect('/kategori');
    }

    public function delete($id)
    {
        DB::table('kategori')->where('ID_KATEGORI', $id)->delete();
        return redirect('/kategori');
    }
}
