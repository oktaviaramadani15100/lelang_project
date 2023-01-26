<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $data = Barang::create([
            "user_id" => auth()->user()->id,
            "preview_item" => $request->preview_item,
            "price" => $request->price,
            "minimum_bid" => $request->minimum_bid,
            "starting_date" => $request->starting_date,
            "expiration_date" => $request->expiration_date,
            "title" => $request->title,
            "foto" => $request->foto,
            "deskrpsi" => $request->deskrpsi,
        ]);
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

        return view('halaman.user', compact('data'));
    }  
    
    //detail
    public function from_detail($id)
    {   
        $data = Barang::find($id);

        // dd($data);
        return view('tampilan_detail.detail', compact('data'));
        // return view('tampilan_detail.detail', compact('data'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login')->with('succes', 'berhasil logout');
    }

}
