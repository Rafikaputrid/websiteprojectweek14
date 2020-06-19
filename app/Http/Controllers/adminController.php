<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function index()
    {
        //Mengambil data dari table admin
        $admin = DB::table('admin')->get();

        //mengirim data admin ke view index
        return view('admin/index',['admin' => $admin]);
    }

    public function tambah()
    {
        //Memanggil view tambah
        return view('admin/tambah');
    }

    //method untuk insert data ke table admin
    public function store(Request $request)
    {
        //insert data ke table admin
        DB::table('admin')->insert([
            'NAMA_ADMIN' => $request->nama,
            'EMAIL_ADMIN' => $request->email,
            'PASSWORD_ADMIN' => $request->password,
            'NO_HP_ADMIN' => $request->hp,
            'ALAMAT_ADMIN' => $request->alamat
        ]);

        //alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    //method untuk edit data admin
    public function edit($id)
    {
        //mengambil data admin berdasarkan id yang dipilih
        $admin = DB::table('admin')->where('ID_ADMIN', $id)->get();

        //passing data pegawai yg didapat ke view edit.blade.php
        return view('admin/edit',['admin' => $admin]);
    }

    //method untuk update data admin
    public function update(Request $request)
    {
        //update data admin
        DB::table('admin')->where('ID_ADMIN', $request->id)->update([
            'NAMA_ADMIN' => $request->nama,
            'EMAIL_ADMIN' => $request->email,
            'PASSWORD_ADMIN' => $request->password,
            'NO_HP_ADMIN' => $request->hp,
            'ALAMAT_ADMIN' => $request->alamat
        ]);

        //alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    //method untuk menghapus admin
    public function delete($id)
    {
        //menghapus data admin berdasarkan id yang dipilih
        DB::table('admin')->where('ID_ADMIN', $id)->delete();

        //alihkan halaman ke halaman admin
        return redirect('/admin');
    }

    public function cetak_pdf()
    {
        $admin = DB::table('admin')->get();
        $pdf = \PDF::loadview('admin/admin_pdf',['admin' => $admin]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream();
    }
}