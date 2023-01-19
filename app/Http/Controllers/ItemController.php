<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        return view('crud.create' , compact('data'));
    }

    public function barang()
    {
        return view('crud.item');
    }

    public function insert_detail(Request $request)
    {
        $data = Barang::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move(public_path().'/assets/img', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect('/market');
    }

    //landing
    public function landing()
    {
        $data = Barang::all();
        return view('halaman.user' , compact('data'));
    }  
    
    //detail
    public function from_detail($id)
    {
        $data = Barang::find($id);
        return view('tampilan_detail.detail', compact('data'));
    }
    
}
