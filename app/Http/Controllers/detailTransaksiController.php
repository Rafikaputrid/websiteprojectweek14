<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class detailTransaksiController extends Controller
{
    public function index()
    {
        $detail_transaksi = DB::table('detail_transaksi')->get();
        return view('detail-transaksi/index', ['detail_transaksi'=> $detail_transaksi]);
    }
}
