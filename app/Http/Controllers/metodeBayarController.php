<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class metodeBayarController extends Controller
{
    public function index()
    {
        $metode_pembayaran = DB::table('metode_pembayaran')->get();
        return view('metodeBayar/index', ['metode_pembayaran'=>$metode_pembayaran]);
    }

    public function tambah()
    {
        return view('metodeBayar/tambah');
    }

    public function store(Request $req)
    {
        DB::table('metode_pembayaran')->insert([
            'NAMA_METODE_BAYAR' => $req->metode
        ]);
        return redirect('/metode-bayar');
    }

    public function edit($id)
    {
        $metode_pembayaran = DB::table('metode_pembayaran')->where("ID_METODE_BAYAR", $id)->get();
        return view('metodeBayar/edit', ['metode_pembayaran' => $metode_pembayaran]);
    }

    public function update(Request $req)
    {
        DB::table('metode_pembayaran')->where('ID_METODE_BAYAR', $req->id)->update([
            'NAMA_METODE_BAYAR' => $req->metode
        ]);
        return redirect('/metode-bayar');
    }
    
    public function delete($id)
    {
        DB::table('metode_pembayaran')->where('ID_METODE_BAYAR', $id)->delete();
        return redirect('/metode-bayar');
    }
}
