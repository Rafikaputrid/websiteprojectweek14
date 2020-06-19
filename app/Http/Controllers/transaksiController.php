<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class transaksiController extends Controller
{
    public function index()
    {
        $transaksi = DB::table('transaksi')->get();
        return view('transaksi/index', ['transaksi' => $transaksi]);
    }

    public function tambah()
    {
        return view('transaksi/tambah');
    }

    public function store(Request $req)
    {
        DB::table('transaksi')->insert([
            'ID_METODE_BAYAR' => $req->metode,
            'ID_PELANGGAN' => $req->pelanggan,
            'ID_ADMIN' => $req->admin,
            'TGL_TRANSAKSI' => $req->tgl,
            'TOTAL_TRANSAKSI' => $req->total
        ]);
        return redirect('/transaksi');
    }

    public function edit($id)
    {
        $transaksi = DB::table('transaksi')->where('ID_TRANSAKSI', $id)->get();
        return view('transaksi/edit', ['transaksi'=> $transaksi]);
    }
    
    public function update(Request $req)
    {
        DB::table('transaksi')->where('ID_TRANSAKSI', $req->id)->update([
            'ID_METODE_BAYAR' => $req->metode,
            'ID_PELANGGAN' => $req->pelanggan,
            'ID_ADMIN' => $req->admin,
            'TGL_TRANSAKSI' => $req->tgl,
            'TOTAL_TRANSAKSI' => $req->total
        ]);
        return redirect('/transaksi');
    }

    public function delete($id)
    {
        DB::table('transaksi')->where('ID_TRANSAKSI', $id)->delete();
        return redirect('/transaksi');
    }
}