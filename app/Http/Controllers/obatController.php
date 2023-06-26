<?php

namespace App\Http\Controllers;

use App\Models\obat;
use Illuminate\Http\Request;

class obatController extends Controller
{
    public function showObat(){
        $data = obat::all();
        return view('indexobat',compact('data'));
    }

    public function tampilObat(){
        return view('addobat');
    }
    
    public function addObat(Request $request){
        
        $dataBaru = new obat();

        $dataBaru->nama_obat = $request->nama_obat;
        $dataBaru->jenis_obat = $request->jenis_obat;
        $dataBaru->harga_obat = $request->harga_obat;
        $dataBaru->khasiat_obat = $request->khasiat_obat;

        $dataBaru ->save();
        // obat::create($request->all());
        return redirect('/showobat');
    }

    public function showEdit($id){
        $data = obat::find($id);
        return view('editobat',compact('data'));
    }

    public function updateObat(Request $request, $id){
        $data = obat::find($id); 
        $data->update($request->all());
        return view('editobat',compact('data'));
     
    }

    public function delete($id){
        $data = obat::find($id);
        $data->delete();
        // dd($data);
        return redirect('/showobat');
    }
}
