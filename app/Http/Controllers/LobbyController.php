<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class LobbyController extends Controller
{
    public function index(){
        $data = Barang::with(['user'])->get();
        return view('halaman.user', compact('data'));
    }

    public function search(Request $request){
        if($request->has('search')){
            $user = Barang::where('preview_item', 'LIKE', '%'.$request->search.'%')->get();
        }
        else{
            $user = Barang::all();
        }

        return view('halaman.user',['user' => $user]);
    }

}
