<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function customer()
    {
        return view('beranda/customer');
    }
    
    public function admin()
    {
        return view('beranda/admin');
    }

    public function loginCust()
    {
        return view('beranda/login-cust');
    }

    public function postLoginCust(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $mail = DB::table('pelanggan')->where('EMAIL_PELANGGAN', $email)->first();
        $pass = DB::table('pelanggan')->where('PASSWORD', $password)->first();

        if ($mail){ //cek apakah email yang dimasukkan sesuai yang di database atau tidak
            if ($pass){
                return redirect('/home-cust');
            }   
        
            else{
                return redirect('/login-cust')->with('alert','Incorrect Email or Password!');
            }
        }
        else{
            return redirect('/login-cust')->with('alert','You dont have an account in Krebag, Dude');
        }
    }

    public function loginAdmin()
    {
        return view('beranda/login-admin');
    }

    public function postLoginAdmin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $mail = DB::table('admin')->where('EMAIL_ADMIN', $email)->first();
        $pass = DB::table('admin')->where('PASSWORD_ADMIN', $password)->first();

        if ($mail){ //cek apakah email yang dimasukkan sesuai yang di database atau tidak
            if ($pass){
                return redirect ('/home-admin');
            }   
        
            else{
                return redirect('/login-admin')->with('alert','Incorrect Email or Password!');
            }
        }
        else{
            return redirect('/login-admin')->with('alert','Sorry you are not admin in Krebag!');
        }
    }

    public function signup()
    {
        return view('beranda/signup');
    }

    public function postSignUp(Request $request)
    {
        $email = $request->Email;
        $mail = DB::table('Pelanggan')->where('EMAIL_PELANGGAN', $email)->first();
        
        if ($mail){
            return redirect ('/signup')->with('alert', 'You Have Already an Account, Dear');
        }

        else{
            DB::table('pelanggan')->insert([
                'NAMA_PELANGGAN' => $request->Nama,
                'EMAIL_PELANGGAN' => $request->Email,
                'PASSWORD' => $request->Password,
                'NO_HP_PELANGGAN' => $request->hp,
                'ALAMAT_PELANGGAN' => $request->Alamat
            ]);

            return redirect('/home-cust');
        }
    }

    public function handbag()
    {
        $barang = DB::table('barang')->where('ID_KATEGORI', '6')->get();

        return view('beranda/handbag',['barang' => $barang]);
    }
}
