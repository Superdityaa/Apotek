<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Models\obat;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(){
        $data = transaksi::all();
        $datao = obat::all();
        return view('indextransaksi',compact('data','datao'));
    }

    public function tampil(){
        $data = transaksi::all();
        $data1 = obat::all();
        return view('addtransaksi',compact('data','data1'));
    }
    
    public function addTransaksi(Request $request){
        transaksi::create([
            'nama_pembeli'=>$request->nama_pembeli,
            'alamat_pembeli'=>$request->alamat_pembeli,
            'total'=>$request->total,
            'id_obat'=>$request->nama_obat,
        ]);
        return redirect()->route('index');
        // dd($request);
    }


    public function delete($id){
        $data = transaksi::find($id);
        $data->delete();
        // dd('$data');
        return redirect()->route('index');
    }
    
}
