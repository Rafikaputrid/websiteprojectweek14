<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class barangController extends Controller
{
    public function index()
    {
        $barang = DB::table('barang')->get();
        return view('barang/index', ['barang' => $barang]);
    }

    public function tambah()
    {
        $kategori = DB::table('kategori')->get();
        return view('barang/tambah',['kategori' => $kategori]);
    }

    public function store(Request $request)
    {
        $coba = substr($request->kategori,0,2);

        // menyimpan data file yang diupload ke variabel $file
        $gambar = $request->gambar;
    
        $nama_file = time()."_".$gambar->getClientOriginalName();
    
            // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $gambar->move($tujuan_upload,$nama_file);

        DB::table('barang')->insert([
            'ID_KATEGORI' => $coba,
            'NAMA_BARANG' => $request->barang,
            'HARGA_BARANG' => $request->harga,
            'STOK_BARANG' => $request->stok,
            'WARNA' => $request->warna,
            'BAHAN' => $request->bahan,
            'BERAT' => $request->berat,
            'PANJANG' => $request->panjang,
            'LEBAR' => $request->lebar,
            'TINGGI' => $request->tinggi,
            'KETERANGAN_BARANG' => $request->keterangan,
            'GAMBAR' => $nama_file
        ]);
        return redirect('/barang');
    }

    public function edit($id)
    {
        $barang = DB::table('barang')->where('ID_BARANG', $id)->get();
        $kategori = DB::table('kategori')->get();
        return view('/barang/edit', ['barang'=>$barang], ['kategori'=>$kategori]);
    }

    public function update(Request $request)
    {
        $coba = substr($request->kategori,0,2);

        // menyimpan data file yang diupload ke variabel $file
        $gambar = $request->gambar;
    
        $nama_file = time()."_".$gambar->getClientOriginalName();
    
            // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $gambar->move($tujuan_upload,$nama_file);

        DB::table('barang')->where('ID_BARANG', $request->id_barang)->update([
            'ID_KATEGORI' => $coba,
            'NAMA_BARANG' => $request->barang,
            'HARGA_BARANG' => $request->harga,
            'STOK_BARANG' => $request->stok,
            'WARNA' => $request->warna,
            'BAHAN' => $request->bahan,
            'BERAT' => $request->berat,
            'PANJANG' => $request->panjang,
            'LEBAR' => $request->lebar,
            'TINGGI' => $request->tinggi,
            'KETERANGAN_BARANG' => $request->keterangan,
            'GAMBAR' => $nama_file
        ]);
        return redirect('/barang');
    }

    public function delete($id)
    {
        DB::table('barang')->where('ID_BARANG', $id)->delete();
        return redirect('/barang');
    }
}