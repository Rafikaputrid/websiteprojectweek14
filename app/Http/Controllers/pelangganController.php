<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pelangganController extends Controller
{
    public function index()
    {
        //Mengambil data pelanggan dari table pelanggan yg ada di phpmyadmin
        $pelanggan = DB::table('pelanggan')->get();

        //Mengirimkan data pelanggan ke view index
        return view('pelanggan/index', ['pelanggan' => $pelanggan]);
    }

    public function tambah()
    {
        return view('pelanggan/tambah');
    }

    public function store(Request $request)
    {
        DB::table('pelanggan')->insert([
            'NAMA_PELANGGAN' => $request->Nama,
            'EMAIL_PELANGGAN' => $request->Email,
            'PASSWORD' => $request->Password,
            'NO_HP_PELANGGAN' => $request->hp,
            'ALAMAT_PELANGGAN' => $request->Alamat
        ]);

        return redirect('/pelanggan');
    }

    public function edit($id)
    {
        $pelanggan = DB::table('pelanggan')->where('ID_PELANGGAN', $id)->get();
        
        return view('pelanggan/edit', ['pelanggan' => $pelanggan]);
    }

    public function upgrade(Request $request)
    {
        DB::table('pelanggan')->where('ID_PELANGGAN', $request->id)->update([
            'NAMA_PELANGGAN' => $request->Nama,
            'EMAIL_PELANGGAN' => $request->Email,
            'PASSWORD' => $request->Password,
            'NO_HP_PELANGGAN' => $request->hp,
            'ALAMAT_PELANGGAN' => $request->Alamat
        ]);

        return redirect('/pelanggan');
    }

    public function delete($id)
    {
        DB::table('pelanggan')->where('ID_PELANGGAN', $id)->delete();

        return redirect('/pelanggan');
    }
}
